var chartOptions={
        chart: {
            type: 'line'
        },
        title: {
            text: 'ปริมาณการให้อาหารในแต่ละเดือน'
        },
        subtitle: {
            text: 'ที่มา: แสดงหัวข้อย่อย'
        },
        xAxis: {
            categories: [
                'ม.ค.',
                'ก.พ.',
                'มี.ค.',
                'เม.ย.',
                'พ.ค.',
                'มิ.ย.',
                'ก.ค.',
                'ส.ค.',
                'ก.ย.',
                'ต.ค.',
                'พ.ย.',
                'ธ.ค.'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'กิโลกรัม'
            }
        },
        plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            //enableMouseTracking: false
        }
    }
}
