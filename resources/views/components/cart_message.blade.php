@if(session()->has('cart_message'))

<div class="flash-message-builder">
    <p>{{session('cart_message')}}</p>
    <button onclick="closePopUp()">&times;</button>
</div>

@endif

<script>
    document.addEventListener('DOMContentLoaded', function(){
        setTimeout(() => {
            document.querySelector('.flash-message-builder').style.display='none';
        }, 5000);
    });

    function closePopUp(){
        const PopUp = document.querySelector('.flash-message-builder');
        PopUp.classList.add('hidden');
    }
</script>
