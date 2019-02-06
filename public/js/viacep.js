$(function () {

  var zipRequest;
  $('#zip_code').on('change keyup blur', function (e) {
    $('#address-result').removeClass('hidden');
    var zipCode = $(this).val();

    zipRequest = $.ajax({
      url: 'https://viacep.com.br/ws/'+zipCode+'/json/',
      dataType: 'Json',
      success: function (data) {

        $('#address_neighborhood').val(data.bairro);
        $('#address_street').val(data.logradouro);
        $('#address_city').val(data.localidade);
        $('#address_state').val(data.uf);
        $('#address-result');

      },
      error: function(data) {
        return;
      }
    });
  });
});
