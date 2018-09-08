define([
    'Magento_Ui/js/grid/columns/column'
], function (Column) {
    'use strict';

    return Column.extend({
        defaults: {
            bodyTmpl: 'Magenest_Movie/change'
        },
        odd: 'Critical',
        event: 'Notice',
        getText: function (entity_id) {
            var html = '';
            if(entity_id%2==0) {
                html += this.event;
            }
            else
                { html += this.odd;}
            return html;
        },
        getClass: function(id) {
            if (id %2 == 0) {
                return 'grid-severity-notice';
            } else {
                return 'grid-severity-major'
            }
        }
    });
});
