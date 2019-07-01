<?php
    /** AlphaKit - CsvIterator
     * This class opens a file and iterates over its lines and executes a passed callback
     * function on every line. The default CSV-seperator is ','.
     * Diese Klasse öffnet und iteriert über eine CSV Datei (der Trenner ','
     * ist als Vorgabe eingestellt) und führt für jede enthaltene Zeile eine übergebene
     * Callbackfunktion mit der Zeile als Parameter aus.
     *
     * The passed parameter for the callback function is an assoc-array with column-names
     * as key accompanied by its value. The first line of entries in the CSV file is
     * automatically intepreted as column names.
     *
     * Callbackobject and the name of the Callbackfunction have to be passed to the
     * Constructor as parameter. A delay in seconds (int) as a third parameter is optional, default is 12 seconds. If the delay is set to false, there is no delay.Optional kann eine Verzögerung in
     * Sekunden als Zahl als dritter Parameter übergeben werden. Der
     * Standardwert für die Verzögerung ist 12 Sekunden. Wird delay auf
     * 'false' gesetzt, findet keine Verzögerung statt.
     *
     * Data Error Handling
     * The iterator automatically skips lines that do not have the correct/fitting number of fields. Each skip is counted as a data-error. At the the end of a complete file iteration the class returns the amount of iterated lines and the amount of dataerrors as a message (string),
     */
    
    class CsvFileIterator
    {
        private $csvFile;
        
        private $fileFieldNames;
        private $fileFieldNameCount;
        
        private $datasetCount=0;
        private $dataErrorCount=0;
        
        private $callbackObject = "";
        private $callbackFunction = "";
        private $callback;
        private $delay;
        
        private $seperator;
        
        // mit einem delay von 12 Sekunden schaffen wir 7200 Mails in 24 Stunden,
        // das passt und sollte auch die schwächste Mailumgebung schonen
        public function __construct($callbackObject, $callbackFunction, $seperator=",", $delay=12)
        {
            $this->callbackObject = $callbackObject;
            $this->callbackFunction = $callbackFunction;
            $this->callback = array(&$this->callbackObject, $this->callbackFunction);
            $this->seperator = $seperator;
            $this->delay = $delay;
        }
        public function iterateCsvFile($csvFile)
        {
            $this->openFile($csvFile);
            
            $count = 0;
            $this->datasetCount = 0;
            
            while ($importLine = $this->getImportLine()) {
                call_user_func($this->callback, $importLine);
                $count++;
                $this->datasetCount++;
                if ($this->delay) {
                    sleep($this->delay);
                }
            }
            
            $out = "";
            $out .= "\nAnzahl der iterierten CSV Zeilen: ".$this->datasetCount;
            $out .= "\nAnzahl der übersprungenen Zeilen (Datenfehler): ".$this->dataErrorCount."\n";
            return $out;
        }
        private function openFile($filename)
        {
            $this->csvFile = fopen($filename, "r");
            
            #First line is field/attributenames:
            $getLine = fgets($this->csvFile);
            
            // Whitespaces kann appear in columnnames in dirty CSV data.
            // These are removed.
            $fNames = explode($this->seperator, $getLine);
            foreach ($fNames as $fName) {
                $this->fileFieldNames[] = trim(str_replace('"', '', $fName));
            }
            
            $this->fileFieldNameCount = count($this->fileFieldNames);
            
            $this->ursprung = "Datei: $filename";
            $this->importSourceIsFile = true;
        }
        private function getImportLine()
        {
            $lineArray = array();
            $thisLine = $this->getValidFileLine();
            
            if (is_array($thisLine)) {
                for ($i = 0; $i < $this->fileFieldNameCount; $i++) {
                    $lineArray[$this->fileFieldNames[$i]] = $thisLine[$i];
                }
            } else {
                $lineArray = false;
            }
            return $lineArray;
        }
        private function getValidFileLine()
        {
            $getLine = fgets($this->csvFile);
            if (false != $getLine) {
                return explode($this->seperator, $getLine);
            } else {
                return false;
            }
        }
    }
