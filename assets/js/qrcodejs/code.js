var qrcode = new QRCode(document.getElementById('qrcode'), {
    text: qrurl,
    width: 500,
    height: 500,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});