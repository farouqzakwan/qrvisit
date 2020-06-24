var qrcode = new QRCode(document.getElementById('qrcode-employee'), {
    text: employee_url,
    width: 150,
    height: 150,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});

var qrcode2 = new QRCode(document.getElementById('qrcode-delivery'), {
    text: delivery_url,
    width: 150,
    height: 150,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});

var qrcode3 = new QRCode(document.getElementById('qrcode-visitor'), {
    text: visitor_url,
    width: 150,
    height: 150,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});