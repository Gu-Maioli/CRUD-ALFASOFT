<div class="alert alert-danger">
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    
    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach
    
    <!-- e exibir usando {{ $slot }} -->
</div>