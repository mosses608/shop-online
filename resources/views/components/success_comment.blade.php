@if(session()->has('success_comment'))
<div class="message-comment">
    <p>{{session('success_comment')}}</p>
</div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function(){
        const flashMessage = document.querySelector('.message-comment');
        setTimeout(() => {
            flashMessage.style.display='none';
        }, 5000);
    });
</script>