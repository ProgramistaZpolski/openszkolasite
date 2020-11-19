function $(h) {
    return document.querySelector(h);
}

fetch("./api/lastposts.json")
    .then(function (resp) { return resp.json() })
    .then(function (data) {
        console.log(data);
        parseDeeta(data);
    })
    .catch(function () {
    });

function parseDeeta(data) {
    $("#annoucement1_img").src = data[0].obrazek;
    $("#annoucement2_img").src = data[1].obrazek;
    $("#annoucement3_img").src = data[2].obrazek;
    $("#annoucement1_title").innerText = data[0].title;
    $("#annoucement2_title").innerText = data[1].title;
    $("#annoucement3_title").innerText = data[2].title;
    $("#annoucement1_desc").innerText = data[0].descritpion;
    $("#annoucement2_desc").innerText = data[1].descritpion;
    $("#annoucement3_desc").innerText = data[2].descritpion;
}