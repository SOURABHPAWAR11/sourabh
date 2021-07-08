using System;
using System.Data;
using System.Configuration;
using System.Collections;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Data.SqlClient;

public partial class Factories_List : System.Web.UI.Page
{
    private SqlConnection cnn = new SqlConnection("Data Source=LAPTOP-27JPT8OQ;Initial Catalog=factorystatistics;Integrated Security=True");
    protected void Page_Load(object sender, EventArgs e)
    {
        cnn.Open();
        SqlDataAdapter da = new SqlDataAdapter("select fname,fcode,ftype,fprocess,workersnum,address from Registeration",cnn);
        DataSet ds = new DataSet();
        da.Fill(ds);
        GridView1.DataSource = ds;
        GridView1.DataBind();
    }
}
