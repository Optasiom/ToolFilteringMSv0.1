<body bgcolor="black" text="red"></body><title>uploaded!</title>
<?php
$t_bgpy1=$_FILES["bgpy"]["type"];
$t_bgpy=$t_bgpy1;
$bgpy_if=0;
switch ($t_bgpy) {
    case "text/plain":
        $bgpy_if=1;
        $bgpy_if_t="py";
        break;
    case "application/octet-stream":
        $bgpy_if=1;
        $bgpy_if_t="rubika";
        break;
    default:
        echo "\n\n\n\n\n\n type file not support! pleas to back page!";
        break;
}
$t_img1=$_FILES["img"]["type"];
$t_img=$t_img1;
$img_if=0;
switch ($t_img) {
    case "image/png":
        $img_if=1;
        break;
    case "image/gif":
        $img_if=1;
        break;
    case "image/jpg":
        $img_if=1;
        break;
    default:
        echo "\n\n\n\n\ntype image not support! pleas to back page!";
        break;
}
function upload_file(){
    $upload_one= "1.1.1.1.1.1.1.1.1(0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0)/".basename($_FILES["bgpy"]["name"]);
    if(move_uploaded_file($_FILES['bgpy']['tmp_name'], $upload_one))
    {
        echo "\n\n\n\n\n\n\n\n\nFile mokhareb (Virus You For Bug Rubika/Filtering) Uploaded link : "."https://tools-filtering-ms.phpnet.us/1.1.1.1.1.1.1.1.1(0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0)/".basename($_FILES["bgpy"]["name"]);
    } else {
        echo "Error!!!!";
    }

}
function upload_img(){
    $upload_tow= "0.0.1.0.1.999.1.1.1.1.1.1.0.0.0.0.0.0.0.0.0.0.0.SEX.Porn.Hack.Virus(0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0)/".basename($_FILES["img"]["name"]);
    if(move_uploaded_file($_FILES['img']['tmp_name'], $upload_tow))
    {
        echo "\n\n\n\n\n\n\n\nimage (Virus You For Bug Rubika/Filtering) Uploaded link : "."https://tools-filtering-ms.phpnet.us/0.0.1.0.1.999.1.1.1.1.1.1.0.0.0.0.0.0.0.0.0.0.0.SEX.Porn.Hack.Virus(0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0.0)/".basename($_FILES["img"]["name"]);
    } else {
        echo "Error!!!!";
    }

}
if ($bgpy_if==1) {
    upload_file();
}
if ($img_if==1) {
    upload_img();
}
?>