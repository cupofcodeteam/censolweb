var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('pages/index', { title: 'CENSOL | Any language, any time' });
});

router.get('/nosotros/quienes-somos', function(req, res, next) {
  res.render('pages/nosotros/quienes-somos', { title: 'CENSOL | Nosotros' });
});

router.get('/nosotros/galeria', function(req, res, next) {
  res.render('pages/nosotros/galeria', { title: 'CENSOL | Galeria' });
});

router.get('/nosotros/contacto', function(req, res, next) {
  res.render('pages/nosotros/contacto', { title: 'CENSOL | Contacto' });
});

router.get('/nosotros/faqs', function(req, res, next) {
  res.render('pages/nosotros/faqs', { title: 'CENSOL | FAQS' });
});

router.get('/instituto/ingles', function(req, res, next) {
  res.render('pages/instituto/ingles', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/ingles/ingles-ninos', function(req, res, next) {
  res.render('pages/instituto/ingles/ingles-ninos', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/ingles/jovenes-y-adultos', function(req, res, next) {
  res.render('pages/instituto/ingles/jovenes-y-adultos', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/ingles/personalizado', function(req, res, next) {
  res.render('pages/instituto/ingles/personalizado', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/ingles/tecnicos', function(req, res, next) {
  res.render('pages/instituto/ingles/tecnicos', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/ingles/corporativo', function(req, res, next) {
  res.render('pages/instituto/ingles/corporativo', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/ingles/en-linea', function(req, res, next) {
  res.render('pages/instituto/ingles/en-linea', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/otros-idiomas/aleman', function(req, res, next) {
  res.render('pages/instituto/otros-idiomas/aleman', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/otros-idiomas/arabe', function(req, res, next) {
  res.render('pages/instituto/otros-idiomas/arabe', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/otros-idiomas/frances', function(req, res, next) {
  res.render('pages/instituto/otros-idiomas/frances', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/otros-idiomas/italiano', function(req, res, next) {
  res.render('pages/instituto/otros-idiomas/italiano', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/otros-idiomas/japones', function(req, res, next) {
  res.render('pages/instituto/otros-idiomas/japones', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/otros-idiomas/mandarin', function(req, res, next) {
  res.render('pages/instituto/otros-idiomas/mandarin', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/otros-idiomas/portugues', function(req, res, next) {
  res.render('pages/instituto/otros-idiomas/portugues', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/intercambio/venezuela', function(req, res, next) {
  res.render('pages/instituto/intercambio/venezuela', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/intercambio/otros-paises', function(req, res, next) {
  res.render('pages/instituto/intercambio/otros-paises', { title: 'CENSOL | Instituto' });
});

router.get('/instituto/espanol', function(req, res, next) {
  res.render('pages/espanol', { title: 'CENSOL | Instituto' });
});

router.get('/traduccion', function(req, res, next) {
  res.render('pages/traduccion/index', { title: 'CENSOL | Traduccion' });
});

router.get('/legal/apostilla', function(req, res, next) {
  res.render('pages/legal/apostilla', { title: 'CENSOL | Traduccion' });
});

router.get('/legal/gestoria', function(req, res, next) {
  res.render('pages/legal/gestoria', { title: 'CENSOL | Traduccion' });
});

router.get('/edicion/redaccion', function(req, res, next) {
  res.render('pages/edicion/redaccion', { title: 'CENSOL | Traduccion' });
});

router.get('/comercial/eventos', function(req, res, next) {
  res.render('pages/comercial/eventos', { title: 'CENSOL | Traduccion' });
});

router.get('/comercial/franquicia', function(req, res, next) {
  res.render('pages/comercial/franquicia', { title: 'CENSOL | Traduccion' });
});

router.get('/comercial/intercambio', function(req, res, next) {
  res.render('pages/comercial/intercambio', { title: 'CENSOL | Traduccion' });
});

module.exports = router;
