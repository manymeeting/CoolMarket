/*
* Normal form submit. Submit the form indicated by formId otherwise submit the closet form to the element
* @param {$element} element
* @param {String} formId (optional)
*/
function submitForm($element, formId)
{
  
  $form = formId ? $("#" + formId) : $element.closest("form");
  if($form.length > 0)
  {
    $form.submit();
  }
}


function setReviewStars(rating, $stars_ul)
{
	rating = Math.floor(rating);
	$stars_ul.children("li").each(function(){
		$(this).find("i").addClass("fa-star-o");
	});

	for (let i = 0; i < rating; i++) {
		$stars_ul.children("li").eq(i).find("i").removeClass("fa-star-o");
		$stars_ul.children("li").eq(i).find("i").addClass("fa-star");
	}
}
        

