$(function () {
    const elements = {
        sortBy: $('input[name="sort_by"]'),
        daysRange: $("#days_range"),
        daysRangeLabel: $("#days_range_label"),
        distanceRange: $("#distance_range"),
        distanceRangeLabel: $("#distance_range_label"),
        toggles: {
            salesToggle: $("#estate_sales_toggle"),
            auctionsToggle: $("#auctions_toggle"),
            otherToggle: $("#other_toggle")
        },
        categories: {
            estateSales: ["#estate_sales", "#moving_sales", "#move_offsite_to_wherehouse", "#by_appointment", "#online_estate_sales"],
            auctions: ["#auctions", "#auction_house", "#online_only_auctions"],
            other: ["#business_closings", "#moved_offsite_to_store", "#outside_sales", "#single_item_type_collections", "#buyouts_or_cleanouts", "#demolition_sales"]
        }
    };

    let values = {
        sortBy: elements.sortBy.filter(CheckType.Checked).val(),
        daysRange: elements.daysRange.val(),
        distanceRange: elements.distanceRange.val(),
        categories: {
            estateSales: {},
            auctions: {},
            other: {}
        }
    };

    function updateCategory(category) {
        elements.categories[category].forEach(selector => {
            const el = $(selector);
            values.categories[category][selector] = el.is(CheckType.Checked) ? el.val() : null;
        });
    }

    function assignToggle(category, checked) {
        elements.categories[category].forEach(selector => $(selector).prop(PropType.Checked, checked));
        updateCategory(category);
    }

    elements.sortBy.on(InputType.Click, function () {
        values.sortBy = elements.sortBy.filter(CheckType.Checked).val();
        fetchRecords();
    });

    elements.daysRange.on(InputType.Input, function () {
        values.daysRange = this.value;
        elements.daysRangeLabel.text(this.value);
    });
    elements.daysRange.on(InputType.Change, function () {
        values.daysRange = this.value;
        elements.daysRangeLabel.text(this.value);
        fetchRecords();
    });

    elements.distanceRange.on(InputType.InputChange, function () {
        values.distanceRange = this.value;
        elements.distanceRangeLabel.text(this.value);
        fetchRecords();
    });

    Object.keys(elements.categories).forEach(category => {
        elements.categories[category].forEach(selector => {
            $(selector).on(InputType.Click, () => updateCategory(category));
        });
    });

    Object.keys(elements.toggles).forEach(category => {
        elements.toggles[category].on(InputType.Change, function (){
            assignToggle(category, $(this).is(CheckType.Checked));
        });
    });

    function fetchRecords() {
        console.log("Fetching records with updated values", values);
        // ajax code goes here
    }
});
