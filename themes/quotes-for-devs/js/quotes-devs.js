'use strict'
jQuery(document).ready(function($) {
  $("#random-quote-btn").on("click", function(event) {
    event.preventDefault();
    getquote();
  });

  $(window).on('popstate', function(){
    window.location.reload();
  });

  function getquote(){
    $.ajax({
      method: "get",
      url: quote_vars.rest_url + "wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1",
      beforeSend: function(xhr) {
        xhr.setRequestHeader("X-WP-Nonce", quote_vars.wpapi_nonce);
      }

    }).done(function(data) {
      console.log(quote_vars.rest_url);
        let $randomData = data[0];
        let $quote = $randomData.content.rendered;
        let $author = $randomData.title.rendered;
        let $url = $randomData._qod_quote_source_url;
        let $source = $randomData._qod_quote_source;

        console.log(data);
        $("#quote").html($quote);
        if ($url === "" && $source === ""){
          $("#author").html(
            `<span>${$author}</span>`
          );
        } else if($source !== "" && $url === ""){
          $("#author").html(
            `<span>${$author}, ${$source}</span>`
          );
        } else {
          $("#author").html(
          `<span>${$author}, <a href="${$url}">${$source}</a></span>`
          );
        };
        window.history.pushState(null, null,
          "/quotes-for-devs/"+ $randomData.slug);
    }).fail(function(error) {
      console.log(error);
        $("#quote").html('<p>Sorry Server Down. please try again later</p>');
        $("#author").html('Server Gate Keeper');
    });
  }

  $( '#submitQuote' ).on( 'click', function(event) {
    event.preventDefault();

    let author = $( '#quote-author' ).val();
    let submit = $( '#quote-submit' ).val();
    let quoteSource = $( '#quote-where' ).val();
    let url = $( '#quote-url' ).val();
    
    $.ajax({
        method: 'POST',
        url: quote_vars.rest_url + "wp/v2/posts",
        data: {
          title: author,
          content: submit,
          _qod_quote_source: quoteSource,
          _qod_quote_source_url: url,
          post_status: "draft",
      },
        beforeSend: function(xhr) {
                xhr.setRequestHeader("X-WP-Nonce", quote_vars.wpapi_nonce);
              }
    }).done(function(data) {
      console.log(data);
      window.location.replace(data.link);
    }).fail(function(data, status) {
      console.log(data);
      console.log(status);
      console.log("try again buddy");
      alert('alexander');
    });
});
});