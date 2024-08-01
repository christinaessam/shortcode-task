jQuery(document).ready(function($) {
    $('#sc_load_more').click(function() {

        var page_no=$('#posts-container').attr('data-page');
        var categories=$('#posts-container').attr('data-categories');
        var numberOfPosts=$('#posts-container').attr('data-postsnum');
        var button=$(this);

        page_no++;
      
        var data = {
            'action': 'load_more',
            'page_no': page_no, 
            'categories': categories,
            'postsnum': numberOfPosts
        };

      
        $.ajax({
            url: myAjax.ajaxurl, 
            type: 'POST',
            data: data,
        success: function(response) {
            if(response=="No more posts"){
                var alert="<div><p class='sc-alert'>No more posts</p></div>";
                $('#main-container').append(alert);
                button.remove(); // Remove the button after loading all posts
            }
            else{
                $('#posts-container').append(response);
                $('#posts-container').attr('data-page', page_no); // Increment page number
            }
        }
        });
    });
});