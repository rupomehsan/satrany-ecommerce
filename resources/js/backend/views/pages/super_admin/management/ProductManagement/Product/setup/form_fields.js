export default [
	{
		name: "title",
		label: "Enter your title",
		type: "text",
		value: "",
	},



	{
		name: "short_description",
		label: "Enter your short description",
		type: "text",
		value: "",
	},



	{
		name: "category_id",
		label: "Select your category",
		type: "select",
		value: "",
        data_list: [],
	},

	{
		name: "brand_id",
		label: "Select your brand ",
		type: "select",
		value: "",
        data_list: [],
	},


	{
		name: "quantity",
		label: "Enter your quantity",
		type: "number",
		value: "",
	},

	{
		name: "alert_quantity",
		label: "Enter your alert quantity",
		type: "number",
		value: "",
	},



	{
		name: "price",
		label: "Enter your price",
		type: "number",
		value: "",
	},



	{
		name: "discount_type",
		label: "Enter your discount type",
		type: "select",
		value: "",
        data_list: [

            {
                name: "Percentage",
                label: "percentage",
            },
            {
                name: "amount",
                label: "amount",
            },
        ],
	},

	{
		name: "discount_amount",
		label: "Enter your discount amount",
		type: "number",
		value: "",
	},
	{
		name: "images",
		label: "Upload your images",
		type: "file",
		value: "",
        multiple: true,
	},



    {
		name: "description",
		label: "Enter your description",
		type: "textarea",
		value: "",
	},
];
