<div class="media">
    <a class="pull-left" href="{{ route('profile' , ['id' => $user->id ]) }}">
        <img class="media-object" alt="{{ $user->username }}" src="{{ $user->getAvatar() }}">
    </a>
    <div class="media-body">
        @if ($user->getName())
          <h3>{{ $user->getName() }}</h3>
        @endif
        <h4 class="media-heading"><a href="{{ route('profile' , ['id' => $user->id ]) }}"> @ {{ $user->username }}</a></h4>
        @if ($user->location)
          <p>{{ $user->location }}</p>
        @endif
    </div>
</div>
