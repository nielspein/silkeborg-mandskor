var util = {
    getUrlParam: function (param) {
        var regex = new RegExp("[\\?&]" + param + "=([^&#]*)"),
            results = regex.exec(window.location.search);
        return (results == null) ? "" : decodeURIComponent(results[1].replace(/\+/g, " "))
    }
}