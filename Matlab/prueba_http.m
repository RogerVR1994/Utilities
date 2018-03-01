function prueba_http
    plot_data=[];
    for i=0:20
        value = urlread('http://13.78.167.106/data.txt');
        val = str2num(value);
        plot_data=[plot_data; val];
        plot(plot_data);
        pause(2)
        %%linkdata on;
    end