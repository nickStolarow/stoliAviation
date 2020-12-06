window.addEventListener && window.addEventListener("message", function (event) {
    if (event.origin === "https://sabsu.youcanbook.me") {
        document.getElementById("ycbmiframesabsu").style.height = event.data + "px";
    }
}, false);