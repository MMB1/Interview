<?php

// Take whole HTML in variable
$html = '
<input type="text" class="form-control" id="fhname" name="fhname" placeholder="User Name" value="Moe">

<table id="content_node">
    <tr>
        <td class="card">
            <table id="MainContent" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
                <tbody>
                    <tr>
                        <td style="padding: 50px 60px;" class="card-content">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td style="padding: 0; margin: 0;">
                                            <h1 style="padding: 0; margin: 0;">New Service Request</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 style="padding: 0; margin: 0; font-weight: 600; text-align:justify;">
                                                Your company has received a service request
                                                <a href="#" target="_blank"
                                                    style="color:black; display: inline-block;">#22222e2222</a>
                                                from CALLER: Johnatan Doe.
                                            </h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                                class="container">
                                                <tbody>
                                                    <tr>
                                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="50%" align="left" valign="top"
                                                            style="padding-right: 5px; max-width: 240px;"
                                                            class="mobile">
                                                            <div style="font-size: 12px; color: gray;">Customer</div>
                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                id="customer">My new Customer
                                                            </h3>
                                                        </td>
                                                        <td height="12" style="height: 12px;"
                                                            class="mobile vertical-column-space"></td>
                                                        <td width="50%" align="left" valign="top"
                                                            style="max-width: 240px;" class="mobile">
                                                            <div style="font-size: 12px; color: gray;">Priority</div>
                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                id="priority">Emergency-4hrs</h3>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="50%" align="left" valign="top"
                                                            style="padding-right: 5px; max-width: 240px;"
                                                            class="mobile">
                                                            <div style="font-size: 12px; color: gray;">Trade</div>
                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                id="trade">HVAC</h3>
                                                        </td>
                                                        <td height="12" style="height: 12px;"
                                                            class="mobile vertical-column-space"></td>
                                                        <td width="50%" align="left" valign="top"
                                                            style="max-width: 240px;" class="mobile">
                                                            <div style="font-size: 12px; color: gray;">Scheduled</div>
                                                            <h3 style="padding: 0; margin: 0; font-weight: 600;"
                                                                id="scheduled_date">
                                                                July 19, 2021 <br>
                                                                <span style="font-size: 14px; color: gray;">08:10
                                                                    PM</span>
                                                            </h3>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="50%" align="left" valign="top"
                                                            style="padding-right: 5px; max-width: 240px;"
                                                            class="mobile">
                                                            <div style="font-size: 12px; color: gray;">Category</div>
                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                id="category">REPAIR</h3>
                                                        </td>
                                                        <td height="12" style="height: 12px;"
                                                            class="mobile vertical-column-space"></td>
                                                        <td width="50%" align="left" valign="top"
                                                            style="max-width: 240px;" class="mobile">
                                                            <div style="font-size: 12px; color: gray;">
                                                                NTE (USD )
                                                            </div>
                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                id="nte">$1,000.00</h3>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td class="card">
            <table id="WorkOrderDetails" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
                <tbody>
                    <tr>
                        <td style="padding: 50px 60px;" class="card-content">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td style="padding: 0; margin: 0;">
                                            <h1 style="padding: 0; margin: 0;">Work Order Details</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                                class="container">
                                                <tbody>
                                                    <tr>
                                                        <td width="50%" align="left" valign="top"
                                                            style="padding-right: 5px; max-width: 240px;"
                                                            class="mobile">
                                                            <div style="font-size: 12px; color: gray;">Customer Area
                                                            </div>
                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                id="area">COOK LINE/PREP</h3>
                                                        </td>
                                                        <td height="12" style="height: 12px;"
                                                            class="mobile vertical-column-space"></td>
                                                        <td width="50%" align="left" valign="top"
                                                            style="max-width: 240px;" class="mobile">
                                                            <div style="font-size: 12px; color: gray;">Asset</div>
                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                id="asset">Exhaust System/Kitchen</h3>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="50%" align="left" valign="top"
                                                            style="padding-right: 5px; max-width: 240px;"
                                                            class="mobile">
                                                            <div style="font-size: 12px; color: gray;">Problem Type
                                                            </div>
                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                id="problem_type">Exhaust Fan</h3>
                                                        </td>
                                                        <td height="12" style="height: 12px;"
                                                            class="mobile vertical-column-space"></td>
                                                        <td width="50%" align="left" valign="top"
                                                            style="max-width: 240px;" class="mobile">
                                                            <div style="font-size: 12px; color: gray;">Problem</div>
                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                id="problem_code">Repair</h3>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="50%" align="left" valign="top"
                                                            style="padding-right: 5px; max-width: 240px;"
                                                            class="mobile">
                                                            <div style="font-size: 12px; color: gray;">PO#</div>
                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                id="po_number">11111q1111</h3>
                                                        </td>
                                                        <td height="12" style="height: 12px;"
                                                            class="mobile vertical-column-space"></td>
                                                        <td width="50%" align="left" valign="top"
                                                            style="max-width: 240px;" class="mobile">
                                                            <div style="font-size: 12px; color: gray;" id="tracking_number">Tracking Number
                                                            </div>
                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                id="wo_number">22222e2222</h3>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td style="max-width: 480px;" class="mobile-col-2">
                                            <div style="font-size: 12px; color: gray;">Problem Description</div>
                                            <h4
                                                style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;">
                                                "COOK LINE/PREP / Exhaust Fan / Exhaust System/Kitchen / Repair / motor
                                                that was just installed not working"</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td class="card">
            <table id="LocationDetails" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
                <tbody>
                    <tr>
                        <td style="padding: 50px 60px;" class="card-content">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                    <tr>
                                        <td style="padding: 0; margin: 0;">
                                            <h1 style="padding: 0; margin: 0;">Location Details</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                                class="container">
                                                <tbody>
                                                    <tr>
                                                        <td class="mobile">
                                                            <table cellpadding="0" cellspacing="0" border="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="left" style="max-width: 480px;"
                                                                            class="mobile-col-2">
                                                                            <div style="font-size: 12px; color: gray;">
                                                                                Customer</div>
                                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                                id="location_customer">My new Customer
                                                                            </h3>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="28" style="height: 28px;">&nbsp;
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="left" style="max-width: 480px;"
                                                                            class="mobile-col-2">
                                                                            <div style="font-size: 12px; color: gray;">
                                                                                Store ID</div>
                                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                                id="location_name">MNC-123</h3>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="28" style="height: 28px;">&nbsp;
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="left" style="max-width: 480px;"
                                                                            class="mobile-col-2">
                                                                            <div style="font-size: 12px; color: gray;">
                                                                                Location Name</div>
                                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                                id="store_id">Chicago</h3>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="28" style="height: 28px;">&nbsp;
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="left" style="max-width: 480px;"
                                                                            class="mobile-col-2">
                                                                            <div style="font-size: 12px; color: gray;">
                                                                                Address</div>
                                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                                id="location_address">
                                                                                <a href="#" target="_blank"
                                                                                    style="color: black;"
                                                                                    id="location_address">
                                                                                    Main street 123<br>
                                                                                    Chicago IL 66562
                                                                                </a>
                                                                            </h3>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="28" style="height: 28px;">&nbsp;
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="left" style="max-width: 480px;"
                                                                            class="mobile-col-2">
                                                                            <div style="font-size: 12px; color: gray;">
                                                                                Phone</div>
                                                                            <h3
                                                                                style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;">
                                                                                <a href="tel:440-878-3000"
                                                                                    target="_blank"
                                                                                    style="color: black; display: inline-block;"
                                                                                    id="location_phone">999-111-2233</a>
                                                                            </h3>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="28" style="height: 28px;">&nbsp;
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="left" style="max-width: 480px;"
                                                                            class="mobile-col-2">
                                                                            <div style="font-size: 12px; color: gray;">
                                                                                Fax</div>
                                                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;"
                                                                                id="location_fax">-</h3>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>';

// Parsing html doc
$mydom = new DOMDocument();
$mydom->validateOnParse = true;
$mydom->loadHTML($html);
$xpath = new DOMXPath($mydom);

// extract required value
$NTE = $xpath->query('*//td/h3[@id="nte"]')->item(0)->textContent;
$Trade = $xpath->query('*//td/h3[@id="trade"]')->item(0)->textContent;
$Customer = $xpath->query('*//td/h3[@id="customer"]')->item(0)->textContent;
$scheduled_date = trim($xpath->query('*//td/h3[@id="scheduled_date"]')->item(0)->textContent);
$Tracking_number = $xpath->query('*//td/h3[@id="wo_number"]')->item(0)->textContent;
$PO_Number = $xpath->query('*//td/h3[@id="po_number"]')->item(0)->textContent;
$Store_ID = $xpath->query('*//td/h3[@id="location_name"]')->item(0)->textContent;
$location_address = trim($xpath->query('*//td/h3/a[@id="location_address"]')->item(0)->textContent);
$location_phone = trim($xpath->query('*//td/h3/a[@id="location_phone"]')->item(0)->textContent);
$store_id = trim($xpath->query('*//td/h3[@id="store_id"]')->item(0)->textContent);

//Start exporting CSV
header('Content-Type: application/csv; charset=UTF-8');
header('Content-Disposition: attachment;filename="abcd.csv";');
$f = fopen('php://output', 'w');

$keys = array('Tracking Number', 'PO Number', 'Scheduled', 'Customer', 'Trade', 'NTE','Store ID','Address');
$value = array($Tracking_number,$PO_Number,$scheduled_date,$Customer,$Trade,$NTE,$Store_ID,trim($location_address.' ,'.$location_phone.' ,'.$store_id));
for ( $i = 0; $i < count($keys); $i++) {
    fputcsv($f, array($keys[$i], $value[$i]));
 }
 fclose($f);

?>