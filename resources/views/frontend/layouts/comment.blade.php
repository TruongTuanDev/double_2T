
@foreach($comments as $comment)
{{-- {{dd($comments)}} --}}
{{-- @php $dep = $depth-1; @endphp --}}
<div class="display-comment"   @if($comment->parent_id != null) style="margin-left:40px;" @endif>
    <div class="comment-list">
        <div class="single-comment">
            @if($comment->user_info->students['avatar'])
                <img src="{{$comment->user_info->students['avatar']}}" alt="#">
            @else 
                <img src="" alt="5h6h5">
            @endif
            <div class="content">
                {{-- {{$post}} --}}
            <h4>{{$comment->user_info['name']}} <span>At {{$comment->created_at->format('g: i a')}} On {{$comment->created_at->format('M d Y')}}</span></h4>
                <p>{{$comment->comment}}</p>
                {{-- @if($dep) --}}
                <div class="button">
                    <a href="#" class="btn btn-reply reply" data-id="{{$comment->id}}"><i class="fa fa-reply" aria-hidden="true"></i>Trả lời</a>
                    <a href="" class="btn btn-reply cancel" style="display: none;" ><i class="fa fa-trash" aria-hidden="true"></i>Thoát</a>
                </div>
                {{-- @endif --}}
            </div>
        </div>
    </div>
    {{-- @include('frontend.layouts.comment') --}}
</div>    
@endforeach