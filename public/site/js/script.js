$().ready(function() {
	setTimeout(function () {
		$('#success').hide();
	}, 9500); // O valor é representado em milisegundos.
});

$().ready(function() {
	setTimeout(function () {
		$('#danger').hide();
	}, 9500); // O valor é representado em milisegundos.
});

$().ready(function() {
	setTimeout(function () {
		$('#warning').hide();
	}, 9500); // O valor é representado em milisegundos.
});

//$('#phone').mask('(00) 0 0000-0000');
// $('#cpf').mask('000.000.000-00', {reverse: true});
var CpfCnpjMaskBehavior = function (val) {
	return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';
	},
	cpfCnpjpOptions = {
	onKeyPress: function(val, e, field, options) {
	field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);
	}
	};
	//$('#cpf').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);
	/* === END MASK FIELDS === */
	// https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html

	//$('#cep').mask('00000-000');
	// $('#value_unit').mask('000.000.000.000.000,00', {reverse: false});
	// $('#total').mask('000.000.000.000.000,00', {reverse: false});