<div class="alert alert-danger">
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->

    @if ($errors->any())
          @foreach ($errors->all() as $error)
              {{$error}}
          @endforeach
    @endif
    <!-- e exibir usando {{ $slot }} -->
</div>