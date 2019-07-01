<?php
/**
 * AlphaKit - Base64 encoded SVG AlphaKit Icon for the WordPress Dashboard menu
 * Author: Phillip Richdale
 * Author URL: http://www.richdale.de/
 * License: MIT
 * PHP version 7
 *
 * @category WordPress
 * @package  AlphaKit
 * @author   Phillip Richdale <office@richdale.de>
 * @license  MIT https://github.com/PhillipRichdale/AlphaKit/blob/master/LICENSE
 * @link     https://github.com/PhillipRichdale/AlphaKit
 */

namespace AlphaKit;

class AlphaKitPict
{
    /**
     * Singleton - preventing mutiple instances.
     *
     * @return AlphaKitPict
     */
    public static function getInstance()
    {
        if (! isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct()
    {
    }

    public function get()
    {
        return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iV'
            .'VRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGM'
            .'vZWxlbWVudHMvMS4xLyIgICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjI'
            .'iAgIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI'
            .'gICB4bWxuczpzdmc9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiAgIHhtbG5zPSJodHRwOi8vd'
            .'3d3LnczLm9yZy8yMDAwL3N2ZyIgICBpZD0ic3ZnOCIgICB2ZXJzaW9uPSIxLjEiICAgdmlld0JveD0'
            .'iMCAwIDg0LjY2NjY2NCA4NC42NjY2NjkiICAgaGVpZ2h0PSIzMjAiICAgd2lkdGg9IjMyMCI+ICA8Z'
            .'GVmcyAgICAgaWQ9ImRlZnMyIiAvPiAgPG1ldGFkYXRhICAgICBpZD0ibWV0YWRhdGE1Ij4gICAgPHJ'
            .'kZjpSREY+ICAgICAgPGNjOldvcmsgICAgICAgICByZGY6YWJvdXQ9IiI+ICAgICAgICA8ZGM6Zm9yb'
            .'WF0PmltYWdlL3N2Zyt4bWw8L2RjOmZvcm1hdD4gICAgICAgIDxkYzp0eXBlICAgICAgICAgICByZGY'
            .'6cmVzb3VyY2U9Imh0dHA6Ly9wdXJsLm9yZy9kYy9kY21pdHlwZS9TdGlsbEltYWdlIiAvPiAgICAgI'
            .'CAgPGRjOnRpdGxlPjwvZGM6dGl0bGU+ICAgICAgPC9jYzpXb3JrPiAgICA8L3JkZjpSREY+ICA8L21'
            .'ldGFkYXRhPiAgPGcgICAgIHN0eWxlPSJkaXNwbGF5OmlubGluZSIgICAgIHRyYW5zZm9ybT0idHJhb'
            .'nNsYXRlKDAsLTIxMi4zMzMzMikiICAgICBpZD0ibGF5ZXIxIiAvPiAgPGcgICAgIHRyYW5zZm9ybT0'
            .'idHJhbnNsYXRlKDAsLTQ3LjYyNSkiICAgICBzdHlsZT0iZGlzcGxheTppbmxpbmUiICAgICBpZD0ib'
            .'GF5ZXIzIj4gICAgPGcgICAgICAgdHJhbnNmb3JtPSJtYXRyaXgoMS41OTY4NzIxLDAsMCwxLjU5Njg'
            .'3MjEsLTE5LjU4Mzc1MSwzMi4yMjc5MzYpIiAgICAgICBpZD0iZzcxMzUxIj4gICAgICA8ZyAgICAgI'
            .'CAgIGFyaWEtbGFiZWw9Is6xIiAgICAgICAgIHRyYW5zZm9ybT0ibWF0cml4KDAuNzUxODA2NjEsLTA'
            .'uMDk4NTQyNzMsMC4wOTg1NDI3MywwLjc1MTgwNjYxLC00MC41OTc1NzgsLTM3LjM5ODc5NCkiICAgI'
            .'CAgICAgc3R5bGU9ImZvbnQtc3R5bGU6bm9ybWFsO2ZvbnQtdmFyaWFudDpub3JtYWw7Zm9udC13ZWl'
            .'naHQ6Ym9sZDtmb250LXN0cmV0Y2g6bm9ybWFsO2ZvbnQtc2l6ZTo2Ni42NjY2NjQxMnB4O2xpbmUta'
            .'GVpZ2h0OjEuMjU7Zm9udC1mYW1pbHk6c2Fucy1zZXJpZjstaW5rc2NhcGUtZm9udC1zcGVjaWZpY2F'
            .'0aW9uOidzYW5zLXNlcmlmIEJvbGQnO2xldHRlci1zcGFjaW5nOjBweDt3b3JkLXNwYWNpbmc6MHB4O'
            .'2ZpbGw6IzAwMDAwMDtmaWxsLW9wYWNpdHk6MTtzdHJva2U6bm9uZSIgICAgICAgICBpZD0iZmxvd1J'
            .'vb3Q3MTE5OSI+ICAgICAgICA8cGF0aCAgICAgICAgICAgZD0ibSA5MS43Mjg0NDgsODQuODY2Nzg4I'
            .'DcuNzkzNDEyLDEuMDIxNTE4IC0xMC4zNTc3OTksMjIuMTk3NjM0IGMgLTEuMTI4NDcyLDIuNDczOTU'
            .'gLTIuMTI2NzM2LDQuNDU5NjMgLTIuOTk0NzkxLDUuOTU3MDMgMC4xMDg1MDcsMy40NzIyMiA0LjIyN'
            .'TA4OSwxNC43NjA2NCA2LjE0NDQyNiwxNS42NzY2OSAxLjY5NjM5NywwLjgwOTY1IDQuNTgwOTExLDE'
            .'uNjU2OTggNS4xMzU4MTEsLTIuOTgzMTEgaCAxLjUyOTk0OCBjIDAsNS42MjA2NiAtMS40ODUwOTYsO'
            .'C44NzA0NiAtNi44NjEwNzEsOC4xNTg4OSAtMy44MzE4NDQsLTAuNTA3MTkgLTcuMjYyMDQ4LC0xMy4'
            .'xNTkzMyAtNy40NzkwNjIsLTE4LjU0MTI4IC0zLjY2NzUzNSw1LjM4MTk1IC04LjM0NDE4NCw4LjA3M'
            .'jkyIC0xNC4wMjk5NDcsOC4wNzI5MiAtMi42NjkyNzEsMCAtNC44NzE5NjIsLTAuOTY1NzEgLTYuNjA'
            .'4MDczLC0yLjg5NzEzIC0xLjczNjExMSwtMS45MzE0MyAtMi42MDQxNjcsLTQuNDA1MzkgLTIuNjA0M'
            .'TY3LC03LjQyMTg4IDAsLTMuMzIwMzEgMS4wNDE2NjcsLTYuNzM4MjggMy4xMjUsLTEwLjI1MzkgMi4'
            .'xMDUwMzUsLTMuNTE1NjMgNC41MTM4ODksLTYuMTQxNDk4IDcuMjI2NTYyLC03Ljg3NzYwOSAyLjczN'
            .'DM3NSwtMS43NTc4MTIgNS4zMjc2OTEsLTIuNjM2NzE4IDcuNzc5OTQ4LC0yLjYzNjcxOCAyLjg2NDU'
            .'4MywwIDQuNTY4MTQyLDIuMTE1ODg1IDUuMTEwNjc3LDYuMzQ3NjU2IHogbSAtOC40NTYzMTMsMTcuO'
            .'DgwNjAyIGMgMCwtNC4yNTM0NjkgLTEuMTA2NzcxLC02LjM4MDIwNCAtMy4zMjAzMTMsLTYuMzgwMjA'
            .'0IC0yLjQwODg1NCwwIC00LjkxNTM2NCwyLjQ3Mzk1OCAtNy41MTk1MzEsNy40MjE4NzQgLTIuNjA0M'
            .'TY3LDQuOTI2MjEgLTMuOTA2MjUsOS4zNDI0NSAtMy45MDYyNSwxMy4yNDg3IDAsMy4zNDIwMSAwLjk'
            .'yMjMwOSw1LjAxMzAyIDIuNzY2OTI3LDUuMDEzMDIgMC45NzY1NjMsMCAxLjk4NTY3NywtMC42NjE4O'
            .'SAzLjAyNzM0NCwtMS45ODU2OCAxLjA2MzM2OCwtMS4zNDU0OSAyLjU3MTYxNCwtNC4wNDczMSA0LjU'
            .'yNDczOSwtOC4xMDU0NyB6IiAgICAgICAgICAgc3R5bGU9ImZvbnQtc3R5bGU6aXRhbGljO2ZvbnQtd'
            .'mFyaWFudDpub3JtYWw7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LXN0cmV0Y2g6bm9ybWFsO2ZvbnQtZmF'
            .'taWx5OidUaW1lcyBOZXcgUm9tYW4nOy1pbmtzY2FwZS1mb250LXNwZWNpZmljYXRpb246J1RpbWVzI'
            .'E5ldyBSb21hbiwgQm9sZCBJdGFsaWMnO2ZpbGw6I2ZmZmZmZiIgICAgICAgICAgIGlkPSJwYXRoNzE'
            .'yMDciIC8+ICAgICAgPC9nPiAgICAgIDxnICAgICAgICAgYXJpYS1sYWJlbD0iSyIgICAgICAgICB0c'
            .'mFuc2Zvcm09Im1hdHJpeCgwLjI2NDU4MzMzLDAsLTAuMDMxNzE5NCwwLjI2NDU4MzMzLC0yOC4zMTA'
            .'yMjYsLTEuNTcyODk0OCkiICAgICAgICAgc3R5bGU9ImZvbnQtc3R5bGU6bm9ybWFsO2ZvbnQtdmFya'
            .'WFudDpub3JtYWw7Zm9udC13ZWlnaHQ6OTAwO2ZvbnQtc3RyZXRjaDpub3JtYWw7Zm9udC1zaXplOjY'
            .'2LjY2NjY2NDEycHg7bGluZS1oZWlnaHQ6MS4yNTtmb250LWZhbWlseTpPcmJpdHJvbjstaW5rc2Nhc'
            .'GUtZm9udC1zcGVjaWZpY2F0aW9uOidPcmJpdHJvbiBIZWF2eSc7bGV0dGVyLXNwYWNpbmc6MHB4O3d'
            .'vcmQtc3BhY2luZzowcHg7ZmlsbDojMDAwMDAwO2ZpbGwtb3BhY2l0eToxO3N0cm9rZTpub25lIiAgI'
            .'CAgICAgIGlkPSJmbG93Um9vdDcxMzA4Ij4gICAgICAgIDxwYXRoICAgICAgICAgICBkPSJtIDMyNC4'
            .'3NjM0MSw3MS42OTI3MDggLTE1LjA4NTQ4LDE1LjgxODI2NCBoIC05LjQgbCAzLjM1MjE1LC0xNS44M'
            .'TgyNjQgaCAtMTguNCBsIC05LjYsNDguMDAwMDAyIGggMTguNCBsIDMuMzU3ODUsLTE0Ljg4OTI1IDE'
            .'yLjM0MTY1LDAuMDg5MiA5LjQzMzgzLDE0LjggaCAxNi44IGwgMC43MzMzMywtMy42IGMgLTQuMjY2N'
            .'jYsLTYuNjY2NjcgLTguOCwtMTMuNjY2NjcgLTEzLjA2NjY2LC0yMC40MDAwMDMgbCAyMS4yLC0yMC4'
            .'zOTk5OTkgMC43MzMzMywtMy42IHoiICAgICAgICAgICBzdHlsZT0iZm9udC1zdHlsZTppdGFsaWM7Z'
            .'mlsbDojZmZmZmZmIiAgICAgICAgICAgaWQ9InBhdGg3MTMxNiIgLz4gICAgICA8L2c+ICAgICAgPGc'
            .'gICAgICAgICBpZD0iZzcxMzIzIiAgICAgICAgIHN0eWxlPSJmb250LXN0eWxlOm5vcm1hbDtmb250L'
            .'XZhcmlhbnQ6bm9ybWFsO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zdHJldGNoOm5vcm1hbDtmb250LXN'
            .'pemU6NjYuNjY2NjY0MTJweDtsaW5lLWhlaWdodDoxLjI1O2ZvbnQtZmFtaWx5OnNhbnMtc2VyaWY7L'
            .'Wlua3NjYXBlLWZvbnQtc3BlY2lmaWNhdGlvbjonc2Fucy1zZXJpZiBCb2xkJztsZXR0ZXItc3BhY2l'
            .'uZzowcHg7d29yZC1zcGFjaW5nOjBweDtmaWxsOiMwMDAwMDA7ZmlsbC1vcGFjaXR5OjE7c3Ryb2tlO'
            .'m5vbmUiICAgICAgICAgdHJhbnNmb3JtPSJtYXRyaXgoMC43NTE4MDY2MSwtMC4wOTg1NDI3MywwLjA'
            .'5ODU0MjczLDAuNzUxODA2NjEsLTQwLjU5NzU3OCwtMzcuMzk4Nzk0KSIgICAgICAgICBhcmlhLWxhY'
            .'mVsPSLOsSI+ICAgICAgICA8cGF0aCAgICAgICAgICAgaWQ9InBhdGg3MTMyMSIgICAgICAgICAgIHN'
            .'0eWxlPSJmb250LXN0eWxlOml0YWxpYztmb250LXZhcmlhbnQ6bm9ybWFsO2ZvbnQtd2VpZ2h0OmJvb'
            .'GQ7Zm9udC1zdHJldGNoOm5vcm1hbDtmb250LWZhbWlseTonVGltZXMgTmV3IFJvbWFuJzstaW5rc2N'
            .'hcGUtZm9udC1zcGVjaWZpY2F0aW9uOidUaW1lcyBOZXcgUm9tYW4sIEJvbGQgSXRhbGljJztmaWxsO'
            .'iNmZmZmZmYiICAgICAgICAgICBkPSJtIDkxLjcyODQ0OCw4NC44NjY3ODggNy43OTM0MTIsMS4wMjE'
            .'1MTggLTEwLjM1Nzc5OSwyMi4xOTc2MzQgYyAtMS4xMjg0NzIsMi40NzM5NSAtMi4xMjY3MzYsNC40N'
            .'Tk2MyAtMi45OTQ3OTEsNS45NTcwMyAwLjEwODUwNywzLjQ3MjIyIDQuMjI1MDg5LDE0Ljc2MDY0IDY'
            .'uMTQ0NDI2LDE1LjY3NjY5IDEuNjk2Mzk3LDAuODA5NjUgNC41ODA5MTEsMS42NTY5OCA1LjEzNTgxM'
            .'SwtMi45ODMxMSBoIDEuNTI5OTQ4IGMgMCw1LjYyMDY2IC0xLjQ4NTA5Niw4Ljg3MDQ2IC02Ljg2MTA'
            .'3MSw4LjE1ODg5IC0zLjgzMTg0NCwtMC41MDcxOSAtNy4yNjIwNDgsLTEzLjE1OTMzIC03LjQ3OTA2M'
            .'iwtMTguNTQxMjggLTMuNjY3NTM1LDUuMzgxOTUgLTguMzQ0MTg0LDguMDcyOTIgLTE0LjAyOTk0Nyw'
            .'4LjA3MjkyIC0yLjY2OTI3MSwwIC00Ljg3MTk2MiwtMC45NjU3MSAtNi42MDgwNzMsLTIuODk3MTMgL'
            .'TEuNzM2MTExLC0xLjkzMTQzIC0yLjYwNDE2NywtNC40MDUzOSAtMi42MDQxNjcsLTcuNDIxODggMCw'
            .'tMy4zMjAzMSAxLjA0MTY2NywtNi43MzgyOCAzLjEyNSwtMTAuMjUzOSAyLjEwNTAzNSwtMy41MTU2M'
            .'yA0LjUxMzg4OSwtNi4xNDE0OTggNy4yMjY1NjIsLTcuODc3NjA5IDIuNzM0Mzc1LC0xLjc1NzgxMiA'
            .'1LjMyNzY5MSwtMi42MzY3MTggNy43Nzk5NDgsLTIuNjM2NzE4IDIuODY0NTgzLDAgNC41NjgxNDIsM'
            .'i4xMTU4ODUgNS4xMTA2NzcsNi4zNDc2NTYgeiBtIC04LjQ1NjMxMywxNy44ODA2MDIgYyAwLC00LjI'
            .'1MzQ2OSAtMS4xMDY3NzEsLTYuMzgwMjA0IC0zLjMyMDMxMywtNi4zODAyMDQgLTIuNDA4ODU0LDAgL'
            .'TQuOTE1MzY0LDIuNDczOTU4IC03LjUxOTUzMSw3LjQyMTg3NCAtMi42MDQxNjcsNC45MjYyMSAtMy4'
            .'5MDYyNSw5LjM0MjQ1IC0zLjkwNjI1LDEzLjI0ODcgMCwzLjM0MjAxIDAuOTIyMzA5LDUuMDEzMDIgM'
            .'i43NjY5MjcsNS4wMTMwMiAwLjk3NjU2MywwIDEuOTg1Njc3LC0wLjY2MTg5IDMuMDI3MzQ0LC0xLjk'
            .'4NTY4IDEuMDYzMzY4LC0xLjM0NTQ5IDIuNTcxNjE0LC00LjA0NzMxIDQuNTI0NzM5LC04LjEwNTQ3I'
            .'HoiIC8+ICAgICAgPC9nPiAgICAgIDxnICAgICAgICAgaWQ9Imc3MTMyNyIgICAgICAgICBzdHlsZT0'
            .'iZm9udC1zdHlsZTpub3JtYWw7Zm9udC12YXJpYW50Om5vcm1hbDtmb250LXdlaWdodDo5MDA7Zm9ud'
            .'C1zdHJldGNoOm5vcm1hbDtmb250LXNpemU6NjYuNjY2NjY0MTJweDtsaW5lLWhlaWdodDoxLjI1O2Z'
            .'vbnQtZmFtaWx5Ok9yYml0cm9uOy1pbmtzY2FwZS1mb250LXNwZWNpZmljYXRpb246J09yYml0cm9uI'
            .'EhlYXZ5JztsZXR0ZXItc3BhY2luZzowcHg7d29yZC1zcGFjaW5nOjBweDtmaWxsOiMwMDAwMDA7Zml'
            .'sbC1vcGFjaXR5OjE7c3Ryb2tlOm5vbmUiICAgICAgICAgdHJhbnNmb3JtPSJtYXRyaXgoMC4yNjQ1O'
            .'DMzMywwLC0wLjAzMTcxOTQsMC4yNjQ1ODMzMywtMjguMzEwMjI2LC0xLjU3Mjg5NDgpIiAgICAgICA'
            .'gIGFyaWEtbGFiZWw9IksiPiAgICAgICAgPHBhdGggICAgICAgICAgIGlkPSJwYXRoNzEzMjUiICAgI'
            .'CAgICAgICBzdHlsZT0iZm9udC1zdHlsZTppdGFsaWM7ZmlsbDojZmZmZmZmIiAgICAgICAgICAgZD0'
            .'ibSAzMjQuNzYzNDEsNzEuNjkyNzA4IC0xNS4wODU0OCwxNS44MTgyNjQgaCAtOS40IGwgMy4zNTIxN'
            .'SwtMTUuODE4MjY0IGggLTE4LjQgbCAtOS42LDQ4LjAwMDAwMiBoIDE4LjQgbCAzLjM1Nzg1LC0xNC4'
            .'4ODkyNSAxMi4zNDE2NSwwLjA4OTIgOS40MzM4MywxNC44IGggMTYuOCBsIDAuNzMzMzMsLTMuNiBjI'
            .'C00LjI2NjY2LC02LjY2NjY3IC04LjgsLTEzLjY2NjY3IC0xMy4wNjY2NiwtMjAuNDAwMDAzIGwgMjE'
            .'uMiwtMjAuMzk5OTk5IDAuNzMzMzMsLTMuNiB6IiAvPiAgICAgIDwvZz4gICAgPC9nPiAgPC9nPjwvc'
            .'3ZnPg==';
    }
}
