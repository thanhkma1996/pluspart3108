define([
    'Magento_Ui/js/grid/columns/column'
], function (Column) {
    'use strict';

    return Column.extend({
        defaults: {
            bodyTmpl: 'Magenest_Movie/ratingcol'
        },
        maxRating: 10,
        blackStar: '★',
        whiteStar: '☆',
        getImg: function (rating) {
            var html = '';
            for (var i = 0; i < rating; i++) {
                html += this.blackStar;
            }
            for (i = this.maxRating - rating; i > 0; i--) {
                html += this.whiteStar;
            }
            return html;
        }
    });
});
