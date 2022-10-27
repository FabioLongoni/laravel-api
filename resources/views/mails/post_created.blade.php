@component('mail::message')
# Nuovo post
  
Un nuovo post è stato aggiunto!

@component('mail::button', ['url'=> route('admin.posts.show',$post)])
{{ $post->title}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
