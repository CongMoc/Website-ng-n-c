( function( api ) {

	// Extends our custom "online-clothing-shop" section.
	api.sectionConstructor['online-clothing-shop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );