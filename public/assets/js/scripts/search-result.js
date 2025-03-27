$(function () { // documnet.ready - begin
    //--------------------------------------

    // const dom elements <start>
    const sortBy = $('input[name="sort_by"]');

    const daysRange = $("#days_range");
    const daysRangeLabel = $("#days_range_label");

    const estateSales = $("#estate_sales");
    const movingSales = $("#moving_sales");
    const moveOffsiteToWherehouse = $("#move_offsite_to_wherehouse");
    const byAppointment = $("#by_appointment");
    const onlineEstateSales = $("#online_estate_sales");

    const auctions = $("#auctions");
    const auctionHouse = $("#auction_house");
    const onlineOnlyAuctions = $("#online_only_auctions");

    const businessClosings = $("#business_closings");
    const movedOffsiteToStore = $("#moved_offsite_to_store");
    const outsideSales = $("#outside_sales");
    const singleItemTypeCollections = $("#single_item_type_collections");
    const buyoutsOrCleanouts = $("#buyouts_or_cleanouts");
    const demolitionSales = $("#demolition_sales");

    const distanceRange = $("#distance_range");
    const distanceRangeLabel = $("#distance_range_label");

    const salesToggle = $("#estate_sales_toggle");
    const auctionsToggle = $("#auctions_toggle");
    const otherToggle = $("#other_toggle");
    // const dom elements <end>

    // variables <start>
    let sortByValue = $('input[name="sort_by"]:checked').val();

    let daysRangeValue = daysRange.val();

    let estateSalesValue = estateSales.is(CheckType.Checked) ? estateSales.val() : null;
    let movingSalesValue = movingSales.is(CheckType.Checked) ? movingSales.val() : null;
    let moveOffsiteToWherehouseValue = moveOffsiteToWherehouse.is(CheckType.Checked) ? moveOffsiteToWherehouse.val() : null;
    let byAppointmentValue = byAppointment.is(CheckType.Checked) ? byAppointment.val() : null;
    let onlineEstateSalesValue = onlineEstateSales.is(CheckType.Checked) ? onlineEstateSales.val() : null;

    let aunctionsValue = auctions.is(CheckType.Checked) ? auctions.val() : null;
    let auctionHouseValue = auctionHouse.is(CheckType.Checked) ? auctionHouse.val() : null;
    let onlineOnlyAuctionsValue = onlineOnlyAuctions.is(CheckType.Checked) ? onlineOnlyAuctions.val() : null;

    let businessClosingsValue = businessClosings.is(CheckType.Checked) ? businessClosings.val() : null;
    let movedOffsiteToStoreValue = movedOffsiteToStore.is(CheckType.Checked) ? movedOffsiteToStore.val() : null;
    let outsideSalesValue = outsideSales.is(CheckType.Checked) ? outsideSales.val() : null;
    let singleItemTypeCollectionsValue = singleItemTypeCollections.is(CheckType.Checked) ? singleItemTypeCollections.val() : null;
    let buyoutsOrCleanoutsValue = buyoutsOrCleanouts.is(CheckType.Checked) ? buyoutsOrCleanouts.val() : null;
    let demolitionSalesValue = demolitionSales.is(CheckType.Checked) ? demolitionSales.val() : null;

    let distanceRangeValue = distanceRange.val();

    let salesTogglesChecks = {
        estateSalesCheck: true,
        movingSalesCheck: true,
        moveOffsiteToWherehouseCheck: true,
        byAppointment: true,
        onlineEstateSalesCheck: true
    };

    let auctionsTogglesChecks = {
        auctionsCheck: true,
        auctionHouseCheck: true,
        onlineOnlyAuctionsCheck: true
    };

    let otherTogglesChecks = {
        businessClosingsCheck: true,
        movedOffsiteToStoreCheck: true,
        outsideSalesCheck: true,
        singleItemTypeCollectionsCheck: true,
        buyoutsOrCleanoutsCheck: true,
        demolitionSalesCheck: true
    };
    // variables <end>

    // events <start>
    $(sortBy).on(InputType.Click, function () {
        sortByValue = $('input[name="sort_by"]:checked').val();
        changesMade();
    });

    $(daysRange).on(InputType.Input, function () {
        daysRangeValue = daysRange.val();
        daysRangeLabel.text(daysRangeValue);
    });
    $(daysRange).on(InputType.Change, function () {
        daysRangeValue = daysRange.val();
        changesMade();
    });

    $(estateSales).on(InputType.Click, function () {
        estateSalesValue = estateSales.is(CheckType.Checked) ? estateSales.val() : null;
        salesTogglesChecks.estateSalesCheck = estateSalesValue === null ? false : true;
        updateSalesToggle();
        changesMade();
    });
    $(movingSales).on(InputType.Click, function () {
        movingSalesValue = movingSales.is(CheckType.Checked) ? movingSales.val() : null;
        salesTogglesChecks.movingSalesCheck = movingSalesValue === null ? false : true;
        updateSalesToggle();
        changesMade();
    });
    $(moveOffsiteToWherehouse).on(InputType.Click, function () {
        moveOffsiteToWherehouseValue = moveOffsiteToWherehouse.is(CheckType.Checked) ? moveOffsiteToWherehouse.val() : null;
        salesTogglesChecks.moveOffsiteToWherehouseCheck = moveOffsiteToWherehouseValue === null ? false : true;
        updateSalesToggle();
        changesMade();
    });
    $(byAppointment).on(InputType.Click, function () {
        byAppointmentValue = byAppointment.is(CheckType.Checked) ? byAppointment.val() : null;
        salesTogglesChecks.byAppointment = byAppointmentValue === null ? false : true;
        updateSalesToggle();
        changesMade();
    });
    $(onlineEstateSales).on(InputType.Click, function () {
        onlineEstateSalesValue = onlineEstateSales.is(CheckType.Checked) ? onlineEstateSales.val() : null;
        salesTogglesChecks.onlineEstateSalesCheck = onlineEstateSalesValue === null ? false : true;
        updateSalesToggle();
        changesMade();
    });

    $(auctions).on(InputType.Click, function () {
        aunctionsValue = auctions.is(CheckType.Checked) ? auctions.val() : null;
        auctionsTogglesChecks.auctionsCheck = aunctionsValue === null ? false : true;
        updateAuctionsToggle();
        changesMade();
    });
    $(auctionHouse).on(InputType.Click, function () {
        auctionHouseValue = auctionHouse.is(CheckType.Checked) ? auctionHouse.val() : null;
        auctionsTogglesChecks.auctionHouseCheck = auctionHouseValue === null ? false : true;
        updateAuctionsToggle();
        changesMade();
    });
    $(onlineOnlyAuctions).on(InputType.Click, function () {
        onlineOnlyAuctionsValue = onlineOnlyAuctions.is(CheckType.Checked) ? onlineOnlyAuctions.val() : null;
        auctionsTogglesChecks.onlineOnlyAuctionsCheck = onlineOnlyAuctionsValue === null ? false : true;
        updateAuctionsToggle();
        changesMade();
    });

    $(businessClosings).on(InputType.Click, function () {
        businessClosingsValue = businessClosings.is(CheckType.Checked) ? businessClosings.val() : null;
        otherTogglesChecks.businessClosingsCheck = businessClosingsValue === null ? false : true;
        updateOtherToggle();
        changesMade();
    });
    $(movedOffsiteToStore).on(InputType.Click, function () {
        movedOffsiteToStoreValue = movedOffsiteToStore.is(CheckType.Checked) ? movedOffsiteToStore.val() : null;
        otherTogglesChecks.movedOffsiteToStoreCheck = movedOffsiteToStoreValue === null ? false : true;
        updateOtherToggle();
        changesMade();
    });
    $(outsideSales).on(InputType.Click, function () {
        outsideSalesValue = outsideSales.is(CheckType.Checked) ? outsideSales.val() : null;
        otherTogglesChecks.outsideSalesCheck = outsideSalesValue === null ? false : true;
        updateOtherToggle();
        changesMade();
    });
    $(singleItemTypeCollections).on(InputType.Click, function () {
        singleItemTypeCollectionsValue = singleItemTypeCollections.is(CheckType.Checked) ? singleItemTypeCollections.val() : null;
        otherTogglesChecks.singleItemTypeCollectionsCheck = singleItemTypeCollectionsValue === null ? false : true;
        updateOtherToggle();
        changesMade();
    });
    $(buyoutsOrCleanouts).on(InputType.Click, function () {
        buyoutsOrCleanoutsValue = buyoutsOrCleanouts.is(CheckType.Checked) ? buyoutsOrCleanouts.val() : null;
        otherTogglesChecks.buyoutsOrCleanoutsCheck = buyoutsOrCleanoutsValue === null ? false : true;
        updateOtherToggle();
        changesMade();
    });
    $(demolitionSales).on(InputType.Click, function () {
        demolitionSalesValue = demolitionSales.is(CheckType.Checked) ? demolitionSales.val() : null;
        otherTogglesChecks.demolitionSalesCheck = demolitionSalesValue === null ? false : true;
        updateOtherToggle();
        changesMade();
    });

    $(distanceRange).on(InputType.Input, function () {
        distanceRangeValue = distanceRange.val();
        distanceRangeLabel.text(distanceRangeValue);
    });
    $(distanceRange).on(InputType.Change, function () {
        distanceRangeValue = distanceRange.val();
        updateMarkers();
        changesMade();
    });

    $(salesToggle).on(InputType.Change, function () {
        let check = salesToggle.is(CheckType.Checked) ? true : false;

        assignValueToObjectItems(salesTogglesChecks, check);
        setCheckboxAndToggle_Sales();
        changesMade();
    });
    $(auctionsToggle).on(InputType.Change, function () {
        let check = auctionsToggle.is(CheckType.Checked) ? true : false;

        assignValueToObjectItems(auctionsTogglesChecks, check);
        setCheckboxAndToggle_Auntions();
        changesMade();
    });
    $(otherToggle).on(InputType.Change, function () {
        let check = otherToggle.is(CheckType.Checked) ? true : false;

        assignValueToObjectItems(otherTogglesChecks, check);
        setCheckboxAndToggle_Other();
        changesMade();
    });
    // events <end>

    function changesMade() {
        // printAllVars();
        fetchRecords();
    }

    function fetchRecords() {
        $.ajax({
            url: "http://localhost:8000/api/get-sales",
            type: "GET",
            data: {
                sort_by: sortByValue,
                days_range: daysRangeValue,
                filters: {
                    estate_sales: estateSalesValue,
                    auctions: aunctionsValue,
                    business_closings: businessClosingsValue
                }
            },
            success: function (response) {
                console.log(response);
                addCardsToList(response);
            },
            error: function (error) {
                console.log("error", error);
            }
        });
    }

    function addCardsToList(res) {
        $("#sale-card-holder").empty();
        res.forEach(item => {
            let saleCard =
                `<div class="sale-card">
                <div class="sale-image">
                    <img src="${item.image_url}" alt="Sale Image">
                    <div class="image-overlay">138</div>
                </div>
                <div class="sale-details">
                    <div class="text-muted">Start: ${item.start_date} | End: ${item.end_date}</div>
                    <div class="text-muted">Start Time: ${item.start_time}</div>
                    <div class="text-success font-weight-bold">${item.sale_status}</div>
                    <div class="sale-title">
                        <a href="#">${item.title}</a>
                    </div>
                    <div class="text-muted">${item.category}</div>
                    <div class="text-muted">Listed by ${item.company_name}</div>
                    <div class="font-weight-bold">${item.location}</div>
                </div>
            </div>`;
            $("#sale-card-holder").append(saleCard);
        });
    }

    function assignValueToObjectItems(items, con) {
        for (let item in items) {
            items[item] = con;
        }
    }

    function setCheckboxAndToggle_Sales() {
        setCheckbox(estateSales, salesTogglesChecks.estateSalesCheck);
        setCheckbox(movingSales, salesTogglesChecks.movingSalesCheck);
        setCheckbox(moveOffsiteToWherehouse, salesTogglesChecks.moveOffsiteToWherehouseCheck);
        setCheckbox(byAppointment, salesTogglesChecks.byAppointment);
        setCheckbox(onlineEstateSales, salesTogglesChecks.onlineEstateSalesCheck);

        estateSalesValue = estateSales.is(CheckType.Checked) ? estateSales.val() : null;
        movingSalesValue = movingSales.is(CheckType.Checked) ? movingSales.val() : null;
        moveOffsiteToWherehouseValue = moveOffsiteToWherehouse.is(CheckType.Checked) ? moveOffsiteToWherehouse.val() : null;
        byAppointmentValue = byAppointment.is(CheckType.Checked) ? byAppointment.val() : null;
        onlineEstateSalesValue = onlineEstateSales.is(CheckType.Checked) ? onlineEstateSales.val() : null;
    }

    function setCheckboxAndToggle_Auntions() {
        setCheckbox(auctions, auctionsTogglesChecks.auctionsCheck);
        setCheckbox(auctionHouse, auctionsTogglesChecks.auctionHouseCheck);
        setCheckbox(onlineOnlyAuctions, auctionsTogglesChecks.onlineOnlyAuctionsCheck);

        aunctionsValue = auctions.is(CheckType.Checked) ? auctions.val() : null;
        auctionHouseValue = auctionHouse.is(CheckType.Checked) ? auctionHouse.val() : null;
        onlineOnlyAuctionsValue = onlineOnlyAuctions.is(CheckType.Checked) ? onlineOnlyAuctions.val() : null;
    }

    function setCheckboxAndToggle_Other() {
        setCheckbox(businessClosings, otherTogglesChecks.businessClosingsCheck);
        setCheckbox(movedOffsiteToStore, otherTogglesChecks.movedOffsiteToStoreCheck);
        setCheckbox(outsideSales, otherTogglesChecks.outsideSalesCheck);
        setCheckbox(singleItemTypeCollections, otherTogglesChecks.singleItemTypeCollectionsCheck);
        setCheckbox(buyoutsOrCleanouts, otherTogglesChecks.buyoutsOrCleanoutsCheck);
        setCheckbox(demolitionSales, otherTogglesChecks.demolitionSalesCheck);

        businessClosingsValue = businessClosings.is(CheckType.Checked) ? businessClosings.val() : null;
        movedOffsiteToStoreValue = movedOffsiteToStore.is(CheckType.Checked) ? movedOffsiteToStore.val() : null;
        outsideSalesValue = outsideSales.is(CheckType.Checked) ? outsideSales.val() : null;
        singleItemTypeCollectionsValue = singleItemTypeCollections.is(CheckType.Checked) ? singleItemTypeCollections.val() : null;
        buyoutsOrCleanoutsValue = buyoutsOrCleanouts.is(CheckType.Checked) ? buyoutsOrCleanouts.val() : null;
        demolitionSalesValue = demolitionSales.is(CheckType.Checked) ? demolitionSales.val() : null;
    }

    function setCheckbox(chkbox, con) {
        chkbox.prop(PropType.Checked, con);
        // variable = chkbox.is(CheckType.Checked) ? chkbox.val() : null;
    }

    function updateSalesToggle() {
        let anyChecked = Object.values(salesTogglesChecks).every(value => !value);
        salesToggle.prop(PropType.Checked, !anyChecked);
    }

    function updateAuctionsToggle() {
        let anyChecked = Object.values(auctionsTogglesChecks).every(value => !value);
        auctionsToggle.prop(PropType.Checked, !anyChecked);
    }

    function updateOtherToggle() {
        let anyChecked = Object.values(otherTogglesChecks).every(value => !value);
        otherToggle.prop(PropType.Checked, !anyChecked);
    }

    function printAllVars() {
        console.log(
            ["sortByValue", sortByValue],

            ["daysRangeValue", daysRangeValue],

            ["estateSalesValue", estateSalesValue],
            ["movingSalesValue", movingSalesValue],
            ["moveOffsiteToWherehouseValue", moveOffsiteToWherehouseValue],
            ["byAppointmentValue", byAppointmentValue],
            ["onlineEstateSalesValue", onlineEstateSalesValue],

            ["aunctionsValue", aunctionsValue],
            ["auctionHouseValue", auctionHouseValue],
            ["onlineOnlyAuctionsValue", onlineOnlyAuctionsValue],

            ["businessClosingsValue", businessClosingsValue],
            ["movedOffsiteToStoreValue", movedOffsiteToStoreValue],
            ["outsideSalesValue", outsideSalesValue],
            ["singleItemTypeCollectionsValue", singleItemTypeCollectionsValue],
            ["buyoutsOrCleanoutsValue", buyoutsOrCleanoutsValue],
            ["demolitionSalesValue", demolitionSalesValue],

            ["distanceRangeValue", distanceRangeValue],
        );
    }

    fetchRecords();

    const defualtZoom = 9;
    const meterInMiles = 1609.34;
    let radius = distanceRangeValue * meterInMiles;
    const circleColor = "#ff5722";
    // set map attribution filter
    let map = L.map('map', { scrollWheelZoom: false, attributionControl: false, center: [29.7604, -95.3698], zoom: defualtZoom });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    let circle = L.circle(map.getCenter(), {
        color: circleColor,
        fillOpacity: 0.05,
        radius: radius.toFixed(2),
        weight: 2,
        className: 'dashed-circle'
    }).addTo(map);

    let locations = [
        { lat: 29.75, lng: -95.36, name: "Marker 1" },
        { lat: 29.78, lng: -95.45, name: "Marker 2" },
        { lat: 30.00, lng: -95.20, name: "Marker 3" },
        { lat: 29.50, lng: -95.10, name: "Marker 4" }
    ];

    let markers = [];

    function updateMarkers() {
        var center = map.getCenter();

        circle.setLatLng(center);

        markers.forEach(marker => map.removeLayer(marker));
        markers = [];

        locations.forEach(function (location) {
            var marker = L.marker([location.lat, location.lng]).bindPopup(location.name);
            if (map.distance(center, [location.lat, location.lng]) <= radius) {
                marker.addTo(map);
                markers.push(marker);
            }
        });
    }

    updateMarkers();

    map.on('move', updateMarkers);


    $(".dashed-circle").css("stroke-dasharray", "10, 10");
    //--------------------------------------
}); // documnet.ready - end
