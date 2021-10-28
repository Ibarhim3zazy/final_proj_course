<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link rel="stylesheet" href="css/newsletter page.css">
</head>
<body>
    <?php require("header.php") ?>;
    <div class="news_container">
        <h3 class="header">Newsletter Prefrences</h3>
        <div class="pre_lang">
            <div class="lang_header">PREFERRED LANGUAGE</div>
            <div class="eng_lang">
                <input type="radio" name="lang">English
            </div>
            <div class="ar_lang">
                <input type="radio" name="lang">Arabic
            </div>
        </div>
        <div class="sub">
            <div class="sub_header">SUBSCRIB TO</div>
            <div class="sub_opt">
                <input type="radio" name="receive_newsletters">daily newsletters
            </div>
            <div class="sub_opt">
                <input type="radio" name="receive_newsletters">i do not want to receive daily newsletters
            </div>
        </div>
        <input type="submit" value="SAVE" class="save_btn">
        <div class="unsub">UNSUBSCRIBE FROM ALL COMMUNICATIONA</div>
        <br style=" clear: both;">
    </div>
    <?php require("footer.php") ?>
</body>
</html>
