$(function (){
    /* --- INITIALISATION MODAL --- */
    $('#user_platform_address').parent().hide();
    $('#user_platform_passphrase').parent().hide();
    $('#user_platform_publicKey').prop('required', true);
    $('#user_platform_secretKey').prop('required', true);
    $('#user_platform_hidden_platform').val( $('#user_platform_platform').val())

    /* --- MODAL --- */
    let modal = document.getElementById("modalPlatform");
    let span = document.getElementsByClassName("close")[0];
    $('.platformModal').on('click', function() { modal.style.display = "block"; });
    span.onclick = function() { modal.style.display = "none"; }
    window.onclick = function(event) { if (event.target == modal) { modal.style.display = "none"; } }

    /* --- MODAL PLATFORM CHANGE --- */
    $('#user_platform_platform').on('change', function() {
        showOptionModal();
    });
    
    function showOptionModal() {
        let option = $('#user_platform_platform option:selected').attr('data-name');
        switch (option) {
            case "Metamask":
            case "Substrate":
                $('#user_platform_publicKey').parent().hide();
                $('#user_platform_publicKey').prop('required', false);
                $('#user_platform_secretKey').parent().hide();
                $('#user_platform_secretKey').prop('required', false);
                $('#user_platform_passphrase').parent().hide();
                $('#user_platform_passphrase').prop('required', false);
                $('#user_platform_address').parent().show();
                $('#user_platform_address').prop('required', true);
                break;
            case "KuCoin":
                $('#user_platform_publicKey').parent().show();
                $('#user_platform_publicKey').prop('required', true);
                $('#user_platform_secretKey').parent().show();
                $('#user_platform_secretKey').prop('required', true);
                $('#user_platform_passphrase').parent().show();
                $('#user_platform_passphrase').prop('required', true);
                $('#user_platform_address').parent().hide();
                $('#user_platform_address').prop('required', false);
                break;
            default:
                $('#user_platform_publicKey').parent().show();
                $('#user_platform_publicKey').prop('required', true);
                $('#user_platform_secretKey').parent().show();
                $('#user_platform_secretKey').prop('required', true);
                $('#user_platform_passphrase').parent().hide();
                $('#user_platform_passphrase').prop('required', false);
                $('#user_platform_address').parent().hide();
                $('#user_platform_address').prop('required', false);
                break;
        }
    }
})



