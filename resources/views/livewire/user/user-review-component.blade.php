<div>
    <style>
        nav svg{
            height: 20px;
        }

        nav .hidden{
            display: block !important;

        }
    </style>
    <div class="container" style="padding:30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap-review-form">
                                    
                    <div id="comments">
                        <h2 class="woocommerce-Reviews-title">Add review for</h2>
                        <ol class="commentlist">
                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                                <div id="comment-20" class="comment_container"> 
                                    <img alt="" src="{{ asset('assets/images/products') }}/{{$orderItem->product->image}}" height="80" width="80">
                                    <div class="comment-text">
                                        <p class="meta"> 
                                            <strong class="woocommerce-review__author">{{$orderItem->product->name}}</strong>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div><!-- #comments -->

                    <div id="review_form_wrapper">
                        
                        <div id="review_form">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div id="respond" class="comment-respond"> 

                                <form wire:submit.prevent="addReview" id="commentform" class="comment-form" novalidate="">
                                    <div class="comment-form-rating">
                                        <span>Your rating</span>
                                        <p class="stars">
                                            
                                            <label for="rated-1"></label>
                                            <input type="radio" id="rated-1" name="rating" value="1" wire:model="rating">
                                            <label for="rated-2"></label>
                                            <input type="radio" id="rated-2" name="rating" value="2" wire:model="rating">
                                            <label for="rated-3"></label>
                                            <input type="radio" id="rated-3" name="rating" value="3" wire:model="rating">
                                            <label for="rated-4"></label>
                                            <input type="radio" id="rated-4" name="rating" value="4" wire:model="rating">
                                            <label for="rated-5"></label>
                                            <input type="radio" id="rated-5" name="rating" value="5" checked="checked" wire:model="rating">
                                            @error('rating')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </p>
                                    </div>
                                    <p class="comment-form-comment">
                                        <label for="comment">Your review <span class="required">*</span>
                                        </label>
                                        <div wire:ignore>
                                            <textarea id="comment" name="comment" cols="45" rows="8" wire:model="comment"></textarea>
                                        </div>
                                        @error('comment')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </p>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                    </p>
                                </form>

                            </div><!-- .comment-respond-->
                        </div><!-- #review_form -->
                    </div><!-- #review_form_wrapper -->

                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function(){
            // for short desc textarea
            tinymce.init({
                selector:'#comment',
                setup:function(editor){
                    editor.on('Change', function(e){
                        tinyMCE.triggerSave();
                        var comment_data = $('#comment').val(); //variabel ini sbg konduktor
                        @this.set('comment', comment_data);
                    });
                }
            });
        });
    </script>
@endpush
