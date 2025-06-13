<style>
    .avatar-size{
        width: 6rem;
        height: 6rem;
    }
</style>

@props(['user'])

@if ($user->image)
    <img src="{{  $user->imageUrl() }}" alt="{{ $user->name }}" class="avatar-size w-12 h-12 rounded-full">
@else
    <img src="https://cdn12.picryl.com/photo/2016/12/31/head-the-dummy-avatar-people-b61cdb-1024.png" alt="Dummy avatar" class="avatar-size w-12 h-12 rounded-full" style="background-color: black; border-color: white; border-width: 1px; border-style: solid;">
@endif