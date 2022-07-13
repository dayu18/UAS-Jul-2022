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
        { id: 1, label: "Kota Semarang \n Jawa Tengah \n Indonesia (1)", color: "#fd9696", width : 20 },
		{ id: 2, label: "Kab. Semarang \n Jawa Tengah \n Indonesia (2)", color: "#fd9696", width : 20 },
		{ id: 3, label: "Kab. Banyuwangi \n Jawa Tengah \n Indonesia (3)", color: "#fd9696", width : 20 },
		{ id: 4, label: "Kab. Situbondo \n Jawa Timur \n Indonesia (4)", color: "#ebede7", width : 20 },
		{ id: 5, label: "Kab. Badung \n Bali \n Indonesia (5)", color: "#b2ffdc", width : 20 },
		{ id: 6, label: "Jakarta Selatan \n DKI \n Indonesia (6)", color: "#fe84ff", width : 20 },
		{ id: 7, label: "Kab. Pacitan \n Jawa Timur \n Indonesia (7)", color: "#ebede7", width : 20 },
		{ id: 8, label: "Kab. Gunung Kidul \n DIY \n Indonesia (8)", color: "#6eff81", width : 20 },
		{ id: 9, label: "Kab. Semarang \n Jawa Tengah \n Indonesia (9)", color: "#fd9696", width : 20 },
		{ id: 10, label: "Kab. Sleman \n DIY \n Indonesia (10)", color: "#6eff81", width : 20 },
		{ id: 11, label: "Kota Jogjakarta \n DIY \n Indonesia (11)", color: "#6eff81", width : 20 },
		{ id: 12, label: "Kab. Semarang \n Jawa Tengah \n Indonesia (12)", color: "#fd9696", width : 20 },
		{ id: 14, label: "Kab. Semarang \n Jawa Tengah \n Indonesia (13)", color: "#fd9696", width : 20 },
		{ id: 15, label: "Kab. Sleman \n DIY \n Indonesia (14)", color: "#6eff81", width : 20 },
		{ id: 16, label: "Kab. Bulukamba \n	Sulawesi Selatan \n Indonesia (15)", color: "#cbcaca", width : 20 },
		{ id: 17, label: "Kab. Manggarai Barat	\n NTT \n Indonesia (16)", color: "#ffbf5b", width : 20 },
		{ id: 18, label: "Munich \n German (17)", color: "red", width : 20 },
		{ id: 19, label: "Kab. Semarang \n Jawa Tengah \n Indonesia (18)", color: "#fd9696", width : 20 },
		{ id: 20, label: "Kota Jogjakarta \n DIY \n Indonesia (19)", color: "#6eff81", width : 20 },
		{ id: 21, label: "Kab. Bantul \n DIY \n Indonesia (20)", color: "#6eff81", width : 20 },
		{ id: 22, label: "Jakarta Barat \n DKI \n Indonesia (21)", color: "#fe84ff", width : 20 },
		{ id: 23, label: "Kota Semarang \n Jawa Tengah \n Indonesia (22)", color: "#fd9696", width : 20 },
		{ id: 24, label: "Kota Semarang \n Jawa Tengah \n Indonesia (23)", color: "#fd9696", width : 20 },
		{ id: 25, label: "Kota Semarang \n Jawa Tengah \n Indonesia (24)", color: "#fd9696", width : 20 },
		{ id: 26, label: "Kota Semarang \n Jawa Tengah \n Indonesia (25)", color: "#fd9696", width : 20 },
		{ id: 27, label: "Kota Semarang \n Jawa Tengah \n Indonesia (26)", color: "#fd9696", width : 20 },
		{ id: 28, label: "Kota Semarang \n Jawa Tengah \n Indonesia (27)", color: "#fd9696", width : 20 },
		{ id: 29, label: "Kab. Tabanan \n Bali \n Indonesia (28)", color: "#b2ffdc", width : 20 },
		{ id: 30, label: "Kab. Badung \n Bali \n	Indonesia (29)", color: "#b2ffdc", width : 20 },
		{ id: 31, label: "Kab. Klungkung \n	Bali \n Indonesia (30)", color: "#b2ffdc", width : 20 },
		{ id: 32, label: "Kota Semarang \n Jawa Tengah \n Indonesia (31)", color: "#fd9696", width : 20 },
		{ id: 33, label: "Kab. Badung \n Bali \n	Indonesia (32)", color: "#b2ffdc", width : 20 },
		{ id: 34, label: "Kab.Tabanan \n Bali \n Indonesia (33)", color: "#b2ffdc", width : 20 },
		{ id: 35, label: "Kab. Semarang \n Jawa Tengah \n Indonesia (34)", color: "#fd9696", width : 20 },
		{ id: 36, label: "Kab. Bantul \n DIY \n Indonesia (35)", color: "#6eff81", width : 20 },
		{ id: 37, label: "Kab. Gunung Kidul	\n DIY \n Indonesia (36)", color: "#6eff81", width : 20 },
		{ id: 38, label: "Kab. Semarang \n Jawa Tengah \n Indonesia (37)", color: "#fd9696", width : 20 },
		{ id: 39, label: "Kab. Gunung Kidul \n DIY \n Indonesia (38)", color: "#6eff81", width : 20 },
		
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