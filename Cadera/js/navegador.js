  function detectBrowser() {
    var ie = document.all != undefined;
    var opera = window.opera != undefined;
    if (opera) return "opera";
    if (ie) return "ie";
    if ((window)&&(window.netscape)&&(window.netscape.security)) {
      if (window.XML) {
        return "firefox15";
      }
      else return "firefox10";
    }
    return "ie";      // Si no sabemos que navegador es, devolvemos ie.
  }