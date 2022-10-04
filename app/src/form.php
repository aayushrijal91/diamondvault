<?php
include __DIR__ . '/../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    try {
        if ($recaptcha->score < 0.5) {
            throw new Exception('Low Score');
        }

        $to = $admin_email;

        $subject = "Message from " . $site;

        $interestedJewellery = $_POST['interestedJewellery'];

        $braceletsPreferredStyle = $_POST['braceletsPreferredStyle'];
        $braceletsPreferredAlloy = $_POST['braceletsPreferredAlloy'];
        $braceletsPreferredColor = $_POST['braceletsPreferredColor'];
        $braceletsPreferredCarat = $_POST['braceletsPreferredCarat'];
        $braceletsChooseDiamonds = $_POST['braceletsChooseDiamonds'];
        $braceletsDiamondType = $_POST['braceletsDiamondType'];
        $braceletsWristSize = $_POST['braceletsWristSize'];

        $necklacesPreferredStyle = $_POST['necklacesPreferredStyle'];
        $necklacesPreferredAlloy = $_POST['necklacesPreferredAlloy'];
        $necklacesPreferredColor = $_POST['necklacesPreferredColor'];
        $necklacesPreferredCarat = $_POST['necklacesPreferredCarat'];
        $necklacesChooseDiamonds = $_POST['necklacesChooseDiamonds'];
        $necklacesDiamondType = $_POST['necklacesDiamondType'];
        $necklaceLength = $_POST['necklaceLength'];

        $pendantsPreferredAlloy = $_POST['pendantsPreferredAlloy'];
        $pendantsPreferredColor = $_POST['pendantsPreferredColor'];
        $pendantsPreferredCarat = $_POST['pendantsPreferredCarat'];
        $pendantsChooseDiamonds = $_POST['pendantsChooseDiamonds'];
        $pendantsDiamondType = $_POST['pendantsDiamondType'];
        $pendantsDiamondSetting = $_POST['pendantsDiamondSetting'];
        $pendantsSize = $_POST['pendantsSize'];

        $watchesBrand = $_POST['watchesBrand'];
        $watchesChooseDiamonds = $_POST['watchesChooseDiamonds'];
        $watchesDiamondType = $_POST['watchesDiamondType'];
        $watchesDiamondSetting = $_POST['watchesDiamondSetting'];
        $watchesCustomDial = $_POST['watchesCustomDial'];
        $watchesSideOfLink = $_POST['watchesSideOfLink'];
        $watchesGivePermission = $_POST['watchesGivePermission'];

        $ringsPreferredShape = $_POST['ringsPreferredShape'];
        $ringsPreferredAlloy = $_POST['ringsPreferredAlloy'];
        $ringsPreferredColor = $_POST['ringsPreferredColor'];
        $ringsPreferredCarat = $_POST['ringsPreferredCarat'];
        $ringsChooseDiamonds = $_POST['ringsChooseDiamonds'];
        $ringsDiamondType = $_POST['ringsDiamondType'];
        $ringsSize = $_POST['ringsSize'];
        $ringsClarity = $_POST['ringsClarity'];

        $name = $_POST['name'];
        $phone = $_POST['phoneNumber'];
        $email = $_POST['email'];

        $jewelleryDescription = '';

        switch ($interestedJewellery) {
            case 'Bracelets':
                $jewelleryDescription = '<tr>' .
                    '<td>Interested Jewellery</td>' .
                    '<td><b>' . strip_tags($interestedJewellery) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Style</td>' .
                    '<td><b>' . strip_tags($braceletsPreferredStyle) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Alloy</td>' .
                    '<td><b>' . strip_tags($braceletsPreferredAlloy) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Color</td>' .
                    '<td><b>' . strip_tags($braceletsPreferredColor) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Carat</td>' .
                    '<td><b>' . strip_tags($braceletsPreferredCarat) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Diamonds?</td>' .
                    '<td><b>' . strip_tags($braceletsChooseDiamonds) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Diamonds Type</td>' .
                    '<td><b>' . strip_tags($braceletsDiamondType) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Wrist Size (Cm)?</td>' .
                    '<td><b>' . strip_tags($braceletsWristSize) . '</b></td>' .
                    '</tr>';
                break;

            case 'Necklaces':
                $jewelleryDescription = '<tr>' .
                    '<td>Interested Jewellery</td>' .
                    '<td><b>' . strip_tags($interestedJewellery) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Style</td>' .
                    '<td><b>' . strip_tags($necklacesPreferredStyle) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Alloy</td>' .
                    '<td><b>' . strip_tags($necklacesPreferredAlloy) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Color</td>' .
                    '<td><b>' . strip_tags($necklacesPreferredColor) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Carat</td>' .
                    '<td><b>' . strip_tags($necklacesPreferredCarat) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Diamonds?</td>' .
                    '<td><b>' . strip_tags($necklacesChooseDiamonds) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Diamonds Type</td>' .
                    '<td><b>' . strip_tags($necklacesDiamondType) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Necklace Length (Cm)?</td>' .
                    '<td><b>' . strip_tags($necklaceLength) . '</b></td>' .
                    '</tr>';
                break;

            case 'Pendants':
                $jewelleryDescription = '<tr>' .
                    '<td>Interested Jewellery</td>' .
                    '<td><b>' . strip_tags($interestedJewellery) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Alloy</td>' .
                    '<td><b>' . strip_tags($pendantsPreferredAlloy) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Color</td>' .
                    '<td><b>' . strip_tags($pendantsPreferredColor) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Carat</td>' .
                    '<td><b>' . strip_tags($pendantsPreferredCarat) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Diamonds?</td>' .
                    '<td><b>' . strip_tags($pendantsChooseDiamonds) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Diamonds Type</td>' .
                    '<td><b>' . strip_tags($pendantsDiamondType) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Diamond Settings?</td>' .
                    '<td><b>' . strip_tags($pendantsDiamondSetting) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Pendant Size (Cm)?</td>' .
                    '<td><b>' . strip_tags($pendantsSize) . '</b></td>' .
                    '</tr>';
                break;

            case 'Watches':
                $jewelleryDescription = '<tr>' .
                    '<td>Interested Jewellery</td>' .
                    '<td><b>' . strip_tags($interestedJewellery) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Brand?</td>' .
                    '<td><b>' . strip_tags($watchesBrand) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Diamonds?</td>' .
                    '<td><b>' . strip_tags($watchesChooseDiamonds) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Diamonds Type</td>' .
                    '<td><b>' . strip_tags($watchesDiamondType) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Diamond Settings?</td>' .
                    '<td><b>' . strip_tags($watchesDiamondSetting) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Custom Dial?</td>' .
                    '<td><b>' . strip_tags($watchesCustomDial) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Side of Link?</td>' .
                    '<td><b>' . strip_tags($watchesSideOfLink) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Give permission to share on social media?</td>' .
                    '<td><b>' . strip_tags($watchesGivePermission) . '</b></td>' .
                    '</tr>';
                break;

            case 'Rings':
                $jewelleryDescription = '<tr>' .
                    '<td>Interested Jewellery</td>' .
                    '<td><b>' . strip_tags($interestedJewellery) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Shape?</td>' .
                    '<td><b>' . strip_tags($ringsPreferredShape) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Alloy?</td>' .
                    '<td><b>' . strip_tags($ringsPreferredAlloy) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Color?</td>' .
                    '<td><b>' . strip_tags($ringsPreferredColor) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Preferred Carat?</td>' .
                    '<td><b>' . strip_tags($ringsPreferredCarat) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Choose Diamond?</td>' .
                    '<td><b>' . strip_tags($ringsChooseDiamonds) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Diamond Type?</td>' .
                    '<td><b>' . strip_tags($ringsDiamondType) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Ring Size?</td>' .
                    '<td><b>' . strip_tags($ringsSize) . '</b></td>' .
                    '</tr>' .
                    '<tr>' .
                    '<td>Ring Clarity?</td>' .
                    '<td><b>' . strip_tags($ringsClarity) . '</b></td>' .
                    '</tr>';
                break;
        }


        $message = '<!DOCTYPE html>
                <html>
                    <head>
                        <style>
                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }
                            
                            td, th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }
                            
                            tr:nth-child(even) {
                                background-color: #dddddd;
                            }
                        </style>
                    </head>
                <body><table><tbody>' .
            '<tr>' .
            '<td>Name</td>' .
            '<td><b>' . strip_tags($name) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Phone</td>' .
            '<td><b>' . strip_tags($phone) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Email Address</td>' .
            '<td><b>' . strip_tags($email) . '</b></td>' .
            '</tr>' .
            $jewelleryDescription .
            '</tbody></table></body></html>';

        $headers = "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=utf-8\r\n" .
            "From: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            // "Bcc: " . $bcc_email . "\r\n" .
            "Reply-To: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            header('location:./../thankyou');
        } else {
            throw new Exception('Failed, please submit form again or call us directly.');
        }
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}
