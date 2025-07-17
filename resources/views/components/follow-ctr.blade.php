@props(['user'])

<div {{ $attributes }} x-data="{
    following: {{ $user->isFollowedBy(auth()->user()) ? 'true' : 'false' }},
    followersCount: {{ $user->followers->count() }},
    follow(){
        axios.post('/follow/{{ $user->id }}').then (res =>{
            this.following = !this.following;
            this.followersCount = res.data.followersCount;
        }) .catch(err => {
            console.error(err);
            });
        }
    }" class="w-[320px] border-l" style="padding-left: 2rem; padding-right: 2rem; width: 320px;">
    {{ $slot }}
</div>