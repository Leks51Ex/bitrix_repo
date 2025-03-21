(function ()
{
	'use strict';

	BX(function ()
	{
		if (
			typeof BX.Landing !== "undefined"
			&& typeof BX.Landing.getMode === "function"
			&& BX.Landing.getMode() === 'edit'
		)
		{
			/*If exist View instance - it means it add block on ajax hit. Need bind click event.
			On page loading all .landing-required-link will be binded automatically*/
			var viewInstance = BX.Landing.Component.View.getInstance();
			if (viewInstance)
			{
				var links = [].slice.call(
					document.querySelectorAll('.landing-required-link')
				);
				links.forEach(function (element, index)
				{
					BX.bind(element, 'click', function ()
					{
						viewInstance.onRequiredLinkClick(this);
					});
				});
			}
		}
	});
})();