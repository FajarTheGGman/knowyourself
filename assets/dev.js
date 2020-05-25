// send device information to kirim.php page
function kirim(x, y, z, a, n, l){
$.ajax({
    type: 'POST',
    data: {batre: x, device: y, platform: z, agent: a, network: n, language: l},
    url: '/kirim.php',
    dataType: 'json'
})
}

// get all device information
window.onload = () => {
navigator.getBattery().then((s) => {
    kirim("[?] Battery : " + s.level * 100 + "%\n","[?] Device Ram :" + navigator.deviceMemory + "GB\n", "[?] Platform : " + navigator.platform, "\n[?] User Agent : " + navigator.userAgent + "\n", "[?] Network Type : " + navigator.connection.effectiveType, "\n[?] Language : " + navigator.language)
})
}

