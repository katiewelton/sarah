WebFontConfig = {
  google: {
    families: ['Yanone Kaffeesatz:300,400', 'Raleway:400']
  },
  timeout: 2000
};

(function(d) {
  var wf = d.createElement('script'), s = d.scripts[0];
  wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js';
  s.parentNode.insertBefore(wf, s);
})(document);
