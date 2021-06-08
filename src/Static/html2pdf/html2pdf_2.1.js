"use strict";
var page = require('webpage').create(),
    system = require('system'),
    address, output, size, t, title, getMingyan, getFooter, getHeader, totalPage;
//设置资源价值超时时间(10s)
page.settings.resourceTimeout = 20000


getFooter = function (pageNum, numPages) {
    totalPage = numPages;
    return "<table style=\"border-top: 1px solid black; width: 470px;font-family: Arial;font-size: 8px;\">"
        + "<tr>"
        + "<td style=\"text-align: left;width: 400px;\">xxxxxx</td>"
        + "<td style=\"text-align: right;\">第<span class=\"page\">" + pageNum + "</span>页，共<span class=\"topage\">" + numPages + "</span>页</td>"
        + "</tr>"
        + "</table>";
}

getHeader = function (title) {
    return "<table style=\"border-bottom: 1px solid black; width: 470px;font-family: Arial;font-size: 8px;\">"
        + "<tr>"
        + "页眉"
        + "</tr>"
        + "</table>";
}


if (!system.args.length === 5) {
    console.log('Usage: html2pdf.js URL filename [paperwidth*paperheight|paperformat] title [subjectId]');
    console.log('  paper (pdf output) examples: "5in*7.5in", "10cm*20cm", "176mm*250mm", "A4", "Letter"');
    phantom.exit();
} else {
    address = system.args[1];
    output = system.args[2];
    title = system.args[4];
    page.viewportSize = {width: 600, height: 600};
    if (system.args[2].substr(-4) === ".pdf") {
        size = system.args[3].split('*');
        if (size.length === 2) {
            page.paperSize = {
                width: size[0],
                height: size[1],
                margin: '10px',
                header: {
                    height: "1cm",
                    contents: phantom.callback(function (pageNum, numPages) {
                        return getHeader(title);
                    })
                },
                footer: {
                    height: "1cm",
                    contents: phantom.callback(function (pageNum, numPages) {
                        return getFooter(pageNum, numPages);
                    })
                }
            }
        } else {
            page.paperSize = {
                format: system.args[3],
                orientation: 'portrait',
                margin: '10px',
                header: {
                    height: "1cm",
                    contents: phantom.callback(function (pageNum, numPages) {
                        return getHeader(title);
                    })
                },
                footer: {
                    height: "1cm",
                    contents: phantom.callback(function (pageNum, numPages) {
                        return getFooter(pageNum, numPages);
                    })
                }
            }
        }

    } else {
        console.log('Wrong format!');
        phantom.exit();
    }

    t = Date.now();
    page.open(address, function (status) {
        if (status !== 'success') {
            console.log('Unable to load URL!');
            phantom.exit();
        } else {
            window.setTimeout(function () {
                page.render(output);
                t = Date.now() - t;
                console.log('Generate PDF file succeed in ' + t + ' msec!');
                console.log('##' + totalPage + '##');
                phantom.exit();
            }, 200);
        }
    });
}