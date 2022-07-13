<html>
<head>
    <script type="text/javascript" src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"></script>

    <style type="text/css">
        #dayunetwork {
            width: 100%;
            height: 100%;
            border: 1px solid lightgray;
			margin:auto;
        }
    </style>
</head>
<body>
<div id="dayunetwork"></div>

<script type="text/javascript">


    // create an array with nodes
    var nodes = new vis.DataSet([
        { id: 1, label: "Lawang Sewu (1)", color: "#fd9696", width : 20 },
		{ id: 2, label: "Dusun Semilir (2)", color: "#fd9696", width : 20 },
		{ id: 3, label: "Kolam warna warni (3)", color: "#cbcaca", width : 20 },
		{ id: 4, label: "Alun-Alun \n Kota Besuki (4)", color: "#cbcaca", width : 20 },
		{ id: 5, label: "Finns Beach \n Club (5)", color: "#cbcaca", width : 20 },
		{ id: 6, label: "Tebet Eco Park (6)", color: "#cbcaca", width : 20 },
		{ id: 7, label: "Maron River Pacitan (7)", color: "#cbcaca", width : 20 },
		{ id: 8, label: "Pantai Ngandong (8)", color: "#cbcaca", width : 20 },
		{ id: 9, label: "Pondok Kopi \n Umbul Sidomukti (9)", color: "#fd9696", width : 20 },
		{ id: 10, label: "Jeep Merapi Jaya (10)", color: "#cbcaca", width : 20 },
		{ id: 11, label: "Malioboro Jogjakarta (11)", color: "#fd9696", width : 20 },
		{ id: 12, label: "Area Parkir \n Curug Lawe \n Benowo Kalisidi (12)", color: "#cbcaca", width : 20 },
		{ id: 14, label: "Eling Bening (13)", color: "#fd9696", width : 20 },
		{ id: 15, label: "Lava Tour \n Merapi Jogja (14)", color: "#cbcaca", width : 20 },
		{ id: 16, label: "Pusat Kerajinan \n Perahu Pinisi (15)", color: "#cbcaca", width : 20 },
		{ id: 17, label: "AYANA Komodo \n Resort (16)", color: "#cbcaca", width : 20 },
		{ id: 18, label: "Siegestor (17)", color: "#cbcaca", width : 20 },
		{ id: 19, label: "Kampoeng Rawa (18)", color: "#fd9696", width : 20 },
		{ id: 20, label: "Gudeg Mbah Lindu (19)", color: "#cbcaca", width : 20 },
		{ id: 21, label: "Kalanari Theatre \n Movement (20)", color: "#cbcaca", width : 20 },
		{ id: 22, label: "Museum of Fine Art \n and Ceramics (21)", color: "#cbcaca", width : 20 },
		{ id: 23, label: "Lapangan Pancasila \n Simpang Lima (22)", color: "#fd9696", width : 20 },
		{ id: 24, label: "Masjid Agung \n Jawa Tengah (MAJT) (23)", color: "#cbcaca", width : 20 },
		{ id: 25, label: "Indonesia Kaya \n Park (24)", color: "#cbcaca", width : 20 },
		{ id: 26, label: "Pantai Cipta (25)", color: "#cbcaca", width : 20 },
		{ id: 27, label: "Pantai Tirang (26)", color: "#cbcaca", width : 20 },
		{ id: 28, label: "Pantai Mangunharjo (27)", color: "#cbcaca", width : 20 },
		{ id: 29, label: "Tanah Lot (28)", color: "#fd9696", width : 20 },
		{ id: 30, label: "Kecak Uluwatu (29)", color: "#cbcaca", width : 20 },
		{ id: 31, label: "Pantai Kelingking \n Nusa Penida (30)", color: "#cbcaca", width : 20 },
		{ id: 32, label: "Soto Ayam Dargo \n Pak Wito (31)", color: "#cbcaca", width : 20 },
		{ id: 33, label: "Garuda Wisnu Kencana \n Cultural Park (32)", color: "#cbcaca", width : 20 },
		{ id: 34, label: "Tunjung Beji Ulun \n Danu Beratan Temple (33)", color: "#cbcaca", width : 20 },
		{ id: 35, label: "Saloka Theme Park (34)", color: "#cbcaca", width : 20 },
		{ id: 36, label: "Hutan Pinus Pengger (35)", color: "#cbcaca", width : 20 },
		{ id: 37, label: "HeHa Sky View (36)", color: "#cbcaca", width : 20 },
		{ id: 38, label: "Danau Rawapening (37)", color: "#cbcaca", width : 20 },
		{ id: 39, label: "Taman Bunga Amarilis (38)", color: "#cbcaca", width : 20 },
		
		{ id: 40, label: "\n<b>Redzky Yoga</b>\n\n", color: "#62d3ff", width : 20 },
		{ id: 41, label: "\n<b>Aki Baihaki</b>\n\n", color: "#eefb8c", width : 20 },
		{ id: 42, label: "\n<b>Dedi Iswandi</b>\n\n", color: "#bde362", width : 20 },
		{ id: 43, label: "\n<b>Arif Satriya</b>\n\n", color: "lime", width : 20 },
		{ id: 44, label: "\n<b>Dian Ratnasari</b>\n\n", color: "rgb(255,168,7)", width : 20 },
		{ id: 45, label: "\n<b>Muhammad Dinu</b> \n <b>Imansyah</b>\n\n", color: "#7BE141", width : 20 },
		{ id: 46, label: "\n<b>Rohati Nurfitriasari</b>\n\n", color: "#e4b8ff", width : 20 },
		{ id: 47, label: "\n<b>Cindi C.S</b>\n\n", color: "#e1b22f", width : 20 },
		{ id: 48, label: "\n<b>Didik Zulfahmi</b> \n <b>Akbar</b>\n\n", color: "#37ffc9", width : 20 },
		{ id: 49, label: "\n<b>Tharieq Adil </b> \n <b>Ramzi</b>\n\n", color: "#fff137", width : 20 },
    ]);

    // create an array with edges
    var edges = new vis.DataSet([
        {from: 1, to: 40, weight: 15},
        {from: 2, to: 40, weight: 15},
        {from: 3, to: 40, weight: 15},
        {from: 4, to: 40, weight: 15},
		{from: 5, to: 40, weight: 15},
		{from: 1, to: 41, weight: 15},
		{from: 6, to: 41, weight: 15},
		{from: 7, to: 41, weight: 15},
        {from: 8, to: 41, weight: 15},
        {from: 9, to: 41, weight: 15},
        {from: 9, to: 42, weight: 15},
		{from: 10, to: 42, weight: 15},
		{from: 11, to: 42, weight: 15},
		{from: 12, to: 42, weight: 15},
		{from: 14, to: 42, weight: 15},
		{from: 14, to: 43, weight: 15},
		{from: 15, to: 43, weight: 15},
		{from: 16, to: 43, weight: 15},
		{from: 17, to: 43, weight: 15},
		{from: 18, to: 43, weight: 15},
		{from: 19, to: 44, weight: 15},
		{from: 20, to: 44, weight: 15},
		{from: 2, to: 44, weight: 15},
		{from: 11, to: 44, weight: 15},
		{from: 14, to: 44, weight: 15},
		{from: 21, to: 45, weight: 15},
		{from: 22, to: 45, weight: 15},
		{from: 19, to: 45, weight: 15},
		{from: 23, to: 45, weight: 15},
		{from: 24, to: 45, weight: 15},
		{from: 23, to: 46, weight: 15},
		{from: 25, to: 46, weight: 15},
		{from: 26, to: 46, weight: 15},
		{from: 27, to: 46, weight: 15},
		{from: 28, to: 46, weight: 15},
		{from: 29, to: 47, weight: 15},
		{from: 30, to: 47, weight: 15},
		{from: 31, to: 47, weight: 15},
		{from: 2, to: 47, weight: 15},
		{from: 32, to: 47, weight: 15},
		{from: 29, to: 48, weight: 15},
		{from: 33, to: 48, weight: 15},
		{from: 34, to: 48, weight: 15},
		{from: 2, to: 48, weight: 15},
		{from: 35, to: 48, weight: 15},
		{from: 36, to: 49, weight: 15},
		{from: 2, to: 49, weight: 15},
		{from: 37, to: 49, weight: 15},
		{from: 38, to: 49, weight: 15},
		{from: 39, to: 49, weight: 15},
    ]);

    // create a network
    var container = document.getElementById('dayunetwork');

    // provide the data in the vis format
    var data = {
        nodes: nodes,
        edges: edges
    };
    var options = {
		nodes: {
			font: {
				// required: enables displaying <b>text</b> in the label as bold text
				multi: 'html',
				// optional: use this if you want to specify the font of bold text
				bold: '16px arial black'
			}
		}

	};

    // initialize your network!
    var network = new vis.Network(container, data, options);
</script>
</body>
</html>