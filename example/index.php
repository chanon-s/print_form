<?php
/**
 * Created by PhpStorm.
 * User: Chanon.S
 * Date: 10/21/2016
 * Time: 2:42 PM
 */
require_once "./widgetRef.php";
?>
<html>
<head>
    <title>FORM</title>
    <link rel="stylesheet" href="reset.css">
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-size: 16px;
        }

        div[class*="widget-"] {
            position: absolute;
            border: thin solid transparent;
            line-height: 1.35em;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .widget-no {
            top: <?php echo WIDGET_NO_TOP; ?>;
            left: <?php echo WIDGET_NO_LEFT; ?>;
            right: <?php echo WIDGET_RIGHT_ONE; ?>;
        }

        .widget-date {
            top: <?php echo WIDGET_DATE_TOP; ?>;
            left: <?php echo WIDGET_DATE_LEFT; ?>;
            right: <?php echo WIDGET_RIGHT_ONE; ?>;
        }

        .widget-name {
            top: <?php echo WIDGET_NAME_TOP; ?>;
            left: <?php echo WIDGET_NAME_LEFT; ?>;
            right: <?php echo WIDGET_RIGHT_ONE; ?>;
        }

        .widget-tax-id-no {
            top: <?php echo WIDGET_TAX_ID_NO_TOP; ?>;
            left: <?php echo WIDGET_TAX_ID_NO_LEFT; ?>;
            right: <?php echo WIDGET_RIGHT_ONE; ?>;
        }

        .widget-address {
            top: <?php echo WIDGET_ADDRESS_TOP; ?>;
            left: <?php echo WIDGET_ADDRESS_LEFT; ?>;
            height: <?php echo WIDGET_ADDRESS_HEIGHT; ?>;
            right: <?php echo WIDGET_RIGHT_ONE; ?>;
            max-lines: 2;
            white-space: normal;
        }

        .widget-condition {
            top: <?php echo WIDGET_CONDITION_TOP; ?>;
            left: <?php echo WIDGET_CONDITION_LEFT; ?>;
            right: <?php echo WIDGET_RIGHT_ONE; ?>;
        }

        .widget-po-no {
            top: <?php echo WIDGET_PO_NO_TOP; ?>;
            left: <?php echo WIDGET_PO_NO_LEFT; ?>;
            width: <?php echo WIDGET_PO_NO_WIDTH; ?>;
            font-size: <?php echo WIDGET_PO_NO_FONT_SIZE; ?>;
        }

        .widget-ctr-no {
            top: <?php echo WIDGET_CTR_NO_TOP; ?>;
            left: <?php echo WIDGET_CTR_NO_LEFT; ?>;
            width: <?php echo WIDGET_CTR_NO_WIDTH; ?>;
            font-size: <?php echo WIDGET_CTR_NO_FONT_SIZE; ?>;
        }

        .widget-job-no {
            top: <?php echo WIDGET_JOB_NO_TOP; ?>;
            left: <?php echo WIDGET_JOB_NO_LEFT; ?>;
            right: <?php echo WIDGET_RIGHT_ONE; ?>;
            font-size: <?php echo WIDGET_JOB_NO_FONT_SIZE; ?>;
        }

        .widget-contain-list {
            top: <?php echo WIDGET_CONTAIN_LIST_TOP; ?>;
            left: <?php echo WIDGET_CONTAIN_LIST_LEFT; ?>;
            right: <?php echo WIDGET_CONTAIN_LIST_RIGHT; ?>;
            bottom: <?php echo WIDGET_CONTAIN_LIST_BOTTOM; ?>;
        }

        .widget-total-no-vat {
            bottom: <?php echo WIDGET_TOTAL_NO_VAT_BOTTOM; ?>;
            right: <?php echo WIDGET_RIGHT_ONE; ?>;
        }

        .widget-vat {
            bottom: <?php echo WIDGET_VAT_BOTTOM; ?>;
            right: <?php echo WIDGET_RIGHT_ONE; ?>;
        }

        .widget-total-inc-vat {
            bottom: <?php echo WIDGET_TOTAL_INC_VAT_BOTTOM; ?>;
            right: <?php echo WIDGET_RIGHT_ONE; ?>;
        }

        table {
            width: 100%;
        }

        td {
            font-size: 16px;
            border: 1px solid transparent;
            padding: 2px 5px;
        }

        td:nth-child(1) {
            width: <?php echo WIDGET_ITEM_WIDTH; ?>;
        }

        td:nth-child(2) {
            width: <?php echo WIDGET_QUANTITY_WIDTH; ?>;
        }

        td:nth-child(3) {
            width: <?php echo WIDGET_DESC_WIDTH; ?>;
        }

        td:nth-child(4) {
            width: <?php echo WIDGET_UNIT_PRICE_WIDTH; ?>;
        }

        td:nth-child(1), td:nth-child(2) {
            text-align: center;
        }

        td:nth-child(5), td:nth-child(4) {
            text-align: right;
        }

        .paper-page {
            display: block;
            width: 8.2677in;
            height: 11.6929in;
            border: thin solid transparent;
            clear: both;
            position: relative;
            /*margin-bottom: 10px;*/
            background-color: white;
            background-image: url("form.jpg");
            background-size: contain;
        }
    </style>
</head>
<body>
<div class="paper-page">
    <?php
    $VALUE_NO = "1610034";
    $VALUE_DATE = "21 ตุลาคม 2559";
    $VALUE_NAME = "บริษัท ศิรกร จำกัด";
    $VALUE_TAX_ID_NO = "0105532121604 (สำนักงานใหญ่)";
    $VALUE_ADDRESS = "53 ซอยจรัญสนิทวงศ์ 91 แขวงบางอ้อ เขตบางพลัด กรุงเทพมหานคร 10700";
    $VALUE_CONDITION = "โอนเงินก่อนส่งของ";
    $VALUE_PO_NO = "PO306/59100002 ลว. 17/10/59";
    $VALUE_CTR_NO = "CTR-2016-03449";
    $VALUE_JOB_NO = "";
    $VALUE_TOTAL_NO_VAT = "7,050.00";
    $VALUE_VAT = "439.50";
    $VALUE_TOTAL_INC_VAT = "7,543.50";
    ?>

    <div class="widget-no"><?php echo $VALUE_NO; ?></div>
    <div class="widget-date"><?php echo $VALUE_DATE; ?></div>
    <div class="widget-name"><?php echo $VALUE_NAME; ?></div>
    <div class="widget-tax-id-no"><?php echo $VALUE_TAX_ID_NO; ?></div>
    <div class="widget-address"><?php echo $VALUE_ADDRESS; ?></div>
    <div class="widget-condition"><?php echo $VALUE_CONDITION; ?></div>
    <div class="widget-po-no"><?php echo $VALUE_PO_NO; ?></div>
    <div class="widget-ctr-no"><?php echo $VALUE_CTR_NO; ?></div>
    <div class="widget-job-no"><?php echo $VALUE_JOB_NO; ?></div>
    <div class="widget-total-no-vat"><?php echo $VALUE_TOTAL_NO_VAT; ?></div>
    <div class="widget-vat"><?php echo $VALUE_VAT; ?></div>
    <div class="widget-total-inc-vat"><?php echo $VALUE_TOTAL_INC_VAT; ?></div>
    <div class="widget-contain-list">
        <table>
            <tr>
                <td>1</td>
                <td>30 เส้น</td>
                <td>High voltage distribution Fuse links-Fuse link 22kV 25A EEI-NEMA Type K</td>
                <td>55.00</td>
                <td>1650.00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>30 เส้น</td>
                <td>High voltage distribution Fuse links-Fuse link 22kV 40A EEI-NEMA Type K</td>
                <td>60.00</td>
                <td>1800.00</td>
            </tr>
            <tr>
                <td>3</td>
                <td>30 เส้น</td>
                <td>High voltage distribution Fuse links-Fuse link 22kV 65A EEI-NEMA Type K</td>
                <td>120.00</td>
                <td>3,600.00</td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>