var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('pages/index', { title: 'CENSOL | Any language, any time', page_name : 'inicio' });
});

router.get('/nosotros/quienes-somos', function(req, res, next) {
  res.render('pages/nosotros/quienes-somos', { title: 'CENSOL | Nosotros', page_name : 'nosotros' });
});

router.get('/nosotros/galeria', function(req, res, next) {
  res.render('pages/nosotros/galeria', { title: 'CENSOL | Galeria', page_name : 'nosotros' });
});

router.get('/nosotros/contacto', function(req, res, next) {
  res.render('pages/nosotros/contacto', { title: 'CENSOL | Contacto', page_name : 'nosotros' });
});

router.get('/nosotros/faqs', function(req, res, next) {
  res.render('pages/nosotros/faqs', { title: 'CENSOL | FAQS', page_name : 'nosotros' });
});

router.get('/idiomas/ingles', function(req, res, next) {
  res.render('pages/idiomas/ingles/ingles', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/ingles/ingles-ninos', function(req, res, next) {
  res.render('pages/idiomas/ingles/ingles-ninos', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/ingles/jovenes-y-adultos', function(req, res, next) {
  res.render('pages/idiomas/ingles/jovenes-y-adultos', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/ingles/personalizado', function(req, res, next) {
  res.render('pages/idiomas/ingles/personalizado', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/ingles/tecnicos', function(req, res, next) {
  res.render('pages/idiomas/ingles/tecnicos', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/ingles/corporativo', function(req, res, next) {
  res.render('pages/idiomas/ingles/corporativo', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/ingles/en-linea', function(req, res, next) {
  res.render('pages/idiomas/ingles/en-linea', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/otros-idiomas/aleman', function(req, res, next) {
  res.render('pages/idiomas/otros-idiomas/aleman', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/otros-idiomas/arabe', function(req, res, next) {
  res.render('pages/idiomas/otros-idiomas/arabe', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/otros-idiomas/frances', function(req, res, next) {
  res.render('pages/idiomas/otros-idiomas/frances', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/otros-idiomas/italiano', function(req, res, next) {
  res.render('pages/idiomas/otros-idiomas/italiano', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/otros-idiomas/japones', function(req, res, next) {
  res.render('pages/idiomas/otros-idiomas/japones', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/otros-idiomas/mandarin', function(req, res, next) {
  res.render('pages/idiomas/otros-idiomas/mandarin', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/otros-idiomas/portugues', function(req, res, next) {
  res.render('pages/idiomas/otros-idiomas/portugues', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/intercambio/venezuela', function(req, res, next) {
  res.render('pages/idiomas/intercambio/venezuela', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/intercambio/otros-paises', function(req, res, next) {
  res.render('pages/idiomas/intercambio/otros-paises', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/idiomas/espanol', function(req, res, next) {
  res.render('pages/idiomas/espanol', { title: 'CENSOL | idiomas', page_name : 'idiomas' });
});

router.get('/traduccion', function(req, res, next) {
  res.render('pages/traduccion/index', { title: 'CENSOL | Traduccion', page_name : 'traduccion' });
});

router.get('/legal/apostilla', function(req, res, next) {
  res.render('pages/legal/apostilla', { title: 'CENSOL | Traduccion', page_name : 'legal' });
});

router.get('/legal/gestoria', function(req, res, next) {
  res.render('pages/legal/gestoria', { title: 'CENSOL | Traduccion', page_name : 'legal' });
});

router.get('/edicion/redaccion', function(req, res, next) {
  res.render('pages/edicion/redaccion', { title: 'CENSOL | Traduccion', page_name : 'edicion' });
});

router.get('/comercial/eventos', function(req, res, next) {
  res.render('pages/comercial/eventos', { title: 'CENSOL | Traduccion', page_name : 'comercial' });
});

router.get('/comercial/franquicia', function(req, res, next) {
  res.render('pages/comercial/franquicia', { title: 'CENSOL | Traduccion', page_name : 'comercial' });
});

router.get('/comercial/intercambio', function(req, res, next) {
  res.render('pages/comercial/intercambio', { title: 'CENSOL | Traduccion', page_name : 'comercial' });
});

module.exports = router;
