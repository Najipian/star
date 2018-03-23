function Requester() {
    var self = this;
    this.selectedCity = '';
    this.init = function () {
        $("#egypt_cities").change(function () {
            if($(this).val() != "")
                self.getPrayTimes($(this).val(),"Egypt")
        });

        $("#germany_cities").change(function () {
            if($(this).val() != "")
                self.getPrayTimes($(this).val(),"Germany")
        });
    }

    /*
    *  Get pray time for the selected city by user
    *
    *  @param string city
    *  @param string country
    */
    this.getPrayTimes = function(city,country){
        // Hide the error message if shown from previous request
        $("#result-alert").hide();

        // Empty the pray time and the temperature data
        $(".showData").text("");

        // Show the loading img waiting the api response
        $("#loading").show();

        // Show loading message for the called api
        $("#loading-info").text(" Loading Pray Times ");

        // save the selected city for farther use
        self.selectedCity = city ;

        // init data required for the api call
        getData = {city:city, country:country, method:8};

        $.ajax({
            url: 'http://api.aladhan.com/v1/timingsByCity',
            type: 'GET',
            data: getData,
            dataType: 'JSON',
            success: function(data) {

                if(data.code == 200){
                    // if the response have the right data show data to the user
                    self.showPrayTimes(data.data.timings, self.getCityTemperature);
                }else{
                    // if api call fails show the error message
                    self.errorShow("Error getting city pray times")
                }
            },
            error: function(data){
                console.log(data);
                self.errorShow(data.responseJSON.data)
            }
        });
    }
    /*
     *  Show the pray times data for the user
     *
     *  @param array prayTimes
     *  @param function to be executed after the data show
     */
    this.showPrayTimes = function (prayTimes , callback){
        $.each(prayTimes,function($k,$v){
            $("#" + $k + "-time").text($k + " : " +$v);
        })

        callback(self.selectedCity);
    };

    /*
     *  Get the selected city temperature
     *
     *  @param string city
     *
     */
    this.getCityTemperature = function (city){
        // show the current calling api
        $("#loading-info").text(" Loading City Temperature ");


        var searchtext = "select item.condition from weather.forecast where woeid in (select woeid from geo.places(1) where text='" + city + "') and u='c'"
        $.ajax({
            url: "https://query.yahooapis.com/v1/public/yql?q=" + searchtext + "&format=json",
            type: 'GET',
            dataType: 'JSON',
            success: function(data) {

                $("#loading").hide();
                if(data.query.count && data.query.count == 1){
                    $("#temp-data").text(data.query.results.channel.item.condition.temp + " °C " + data.query.results.channel.item.condition.text   );
                }else{
                    self.errorShow("Error getting city temperature")
                }
            }
        });
    }

    /*
     *  Show the error for the user
     *
     *  @param string errorText
     *
     */
    this.errorShow = function(errorText){
        $("#loading").hide();
        $("#result-alert").show();
        $("#result-alert").text(errorText);
    }
    self.init();
}