require(
    [
        'jquery',
        'Magento_Ui/js/modal/modal'
    ],
    function(
        $,
        modal
    ) {
        var options = {
            type: 'popup',
            responsive: true,
            innerScroll: true,
            title: 'Login Modal of Magento',
            buttons: [{
                text: $.mage.__('Login'),
                class: '',
                click: function () {
                    this.closeModal();
                }
            }]
        };

        var popup = modal(options, $('#popup-mpdal-login'));
        $("#buttons_login").on('click',function(){
            $("#popup-mpdal-login").modal("openModal");
        });

    }
);