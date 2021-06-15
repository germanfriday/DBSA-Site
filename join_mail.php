<?php $section  = "Membership"; $subsection = "Join"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Membership :: Join :: DBSA Metro Detroit</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFF1;
}
-->
</style>
<link href="DBSA_Styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="Print_Styles.css" rel="stylesheet" type="text/css" media="print" />

</head>

<body onload="MM_preloadImages('images/home_f2.jpg','images/support_f2.jpg','images/education_f2.jpg','images/hope_f2.jpg','images/membership_f2.jpg','images/contact_f2.jpg','images/member_info_f2.jpg','images/benefits_f2.jpg','images/join_dbsa_f2.jpg')">
<div align="center">
  <table width="750" height="580" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="145" rowspan="3" valign="top" background="images/side_filler.jpg"><?php include('includes/membership_sidebar.php'); ?></td>
      <td width="605" valign="top"><?php include('includes/header.php'); ?></td>
    </tr>
    <tr>
      <td width="605" height="420" valign="top" background="images/page_filler.gif"><table width="605" height="420" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="605" height="45"><div align="left"><img src="images/join_title.jpg" width="605" height="45" /></div></td>
        </tr>
        <tr>
          <td width="605" height="350"><form name="DBSA Join Form" id="DBSA Join Form" method="post" action="join_action.php">
            <table width="605" height="300" border="0" cellpadding="8" cellspacing="0" background="images/page_filler.gif">
              <tr align="left">
                <td height="25" colspan="4" class="BodyText"><table width="555" border="0" cellspacing="0" cellpadding="15">
                  <tr>
                    <td>Fill out the form below and click 'Continue' to get a
                      finished form <br />
which you can print and mail in to join. </td>
                  </tr>
                </table></td>
                </tr>
              <tr>
                <td height="25" colspan="4" align="left">&nbsp;</td>
                </tr>
              <tr>
                <td width="137" height="25" align="right"><div align="right" class="FieldName">First
                    Name</div></td>
                <td colspan="3" align="left"><div align="left">
                  <input name="Firstname" type="text" id="Firstname" size="35" />
                </div></td>
              </tr>
              <tr>
                <td width="137" height="25" align="right"><div align="right" class="FieldName">Last Name</div></td>
                <td colspan="3" align="left"><div align="left">
                  <input name="Lastname" type="text" id="Lastname" size="35" />
                </div></td>
                </tr>
              <tr>
                <td height="25" align="right"><div align="right" class="FieldName">eMail</div></td>
                <td colspan="3" align="left"><div align="left">
                  <input name="Email" type="text" id="Email" size="35" />
                </div></td>
              </tr>
              <tr>
                <td width="137" height="25" align="right"><div align="right" class="FieldName">Daytime Phone</div></td>
                <td colspan="3" align="left"><div align="left">
                  <input name="Daytimephone" type="text" id="Daytimephone" />
                </div></td>
                </tr>
              <tr>
                <td width="137" height="25" align="right"><div align="right" class="FieldName">Evening
                    Phone </div></td>
                <td colspan="3" align="left"><div align="left">
                  <input name="Eveningphone" type="text" id="Eveningphone" />
                </div></td>
                </tr>
              <tr>
                <td width="137" height="25" align="right" class="FieldName"><div align="right">Address</div></td>
                <td colspan="3"><div align="left">
                  <input name="Address" type="text" id="Address" size="35" />
                </div></td>
                </tr>
              <tr>
                <td width="137" height="25" align="right" class="FieldName"><div align="right">City</div></td>
                <td width="182" height="25" align="left"><div align="left">
                  <input name="City" type="text" id="City" size="15" />
                </div></td>
                <td width="31" align="left" class="FieldName"><div align="left">State</div></td>
                <td width="191" align="left"><div align="left">
                  <select name="State" class="Copyright" id="State">
                        <option>Choose</option>
                        <option value="Alabama">AL</option>
                        <option value="Alaska">AK</option>
                        <option value="Arizona">AZ</option>
                        <option value="Arkansas">AR</option>
                        <option value="California">CA</option>
                        <option value="Colorado">CO</option>
                        <option value="Connecticut">CT</option>
                        <option value="Delaware">DE</option>
                        <option value="DC">DC</option>
                        <option value="Florida">FL</option>
                        <option value="Georgia">GA</option>
                        <option value="Hawaii">HI</option>
                        <option value="Idaho">ID</option>
                        <option value="Illinois">IL</option>
                        <option value="Indiana">IN</option>
                        <option value="Iowa">IA</option>
                        <option value="Kansas">KS</option>
                        <option value="Kentucky">KY</option>
                        <option value="Louisiana">LA</option>
                        <option value="Maine">ME</option>
                        <option value="Maryland">MD</option>
                        <option value="Massachusetts">MA</option>
                        <option value="Michigan">MI</option>
                        <option value="Minnesota">MN</option>
                        <option value="Mississippi">MS</option>
                        <option value="Missouri">MO</option>
                        <option value="Montana">MT</option>
                        <option value="Nebraska">NE</option>
                        <option value="Nevada">NV</option>
                        <option value="New Hampshire">NH</option>
                        <option value="New Jersey">NJ</option>
                        <option value="New Mexico">NM</option>
                        <option value="New York">NY</option>
                        <option value="North Carolina">NC</option>
                        <option value="North Dakota">ND</option>
                        <option value="Ohio">OH</option>
                        <option value="Oklahoma">OK</option>
                        <option value="Oregon">OR</option>
                        <option value="Pennsylvania">PA</option>
                        <option value="Rhode Island">RI</option>
                        <option value="South Carolina">SC</option>
                        <option value="South Dakota">SD</option>
                        <option value="Tennessee">TN</option>
                        <option value="Texas">TX</option>
                        <option value="Utah">UT</option>
                        <option value="Vermont">VT</option>
                        <option value="Virginia">VA</option>
                        <option value="Washington">WA</option>
                        <option value="West Virginia">WV</option>
                        <option value="Wisconsin">WI</option>
                        <option value="Wyoming">WY</option>
                    </select>
                </div></td>
              </tr>
              <tr>
                <td width="137" height="25" align="right" class="FieldName"><div align="right">Zip</div></td>
                <td colspan="3"><div align="left">
                  <input name="Zip" type="text" id="Zip" size="15" />
                </div></td>
                </tr>
              <tr>
                <td height="25" align="right"><div align="right" class="FieldName">Professional
                    agency<br />
                    if applicable</div></td>
                <td height="25" colspan="3" align="right"><div align="left">
                    <input name="Agency" type="text" id="Agency" size="25" />
                </div></td>
                </tr>
              <tr>
                <td width="137" height="25" align="right"><div align="right" class="FieldName">Type</div></td>
                <td colspan="3" align="left"><div align="left">
                  <input name="Newmembership" type="checkbox" id="Newmembership" value="New Membership" />
                    <span class="FieldName">New Membership</span>&nbsp;&nbsp;
				    <input name="Renewal" type="checkbox" id="Renewal" value="Renewal" />
				    <span class="FieldName">Renewal</span>&nbsp;&nbsp;
                    <input name="Changeofaddress" type="checkbox" id="Changeofaddress" value="Change of Address" />
                    <span class="FieldName">Change of Address</span></div></td>
                </tr>
              <tr>
                <td height="25" colspan="4" valign="top" class="FieldName"><table width="475" border="0" align="center" cellpadding="8" cellspacing="0">
                  <tr align="left">
                    <td colspan="2"><div align="left">Bi-Monthly <span class="LinkTextItalic">Life in
                          Balance</span> Newsletter
                        for a Year:</div></td>
                  </tr>
                  <tr align="left">
                    <td width="24" valign="top"><input name="Individualmembership" type="checkbox" id="Individualmembership" value="Individual $25.00" />                      </td>
                    <td width="486" valign="top"><div align="left">Individual Membership <span class="BodyTextBold">$25.00</span></div></td>
                  </tr>
                  <tr align="left">
                    <td valign="top"><input name="Familymembership" type="checkbox" id="Familymembership" value="Family $35.00" />                      </td>
                    <td valign="top"><div align="left">Family Membership <span class="BodyTextBold">$35.00</span></div></td>
                  </tr>
                  <tr align="left">
                    <td valign="top"><input name="Professionalmembership" type="checkbox" id="Professionalmembership" value="Professional $50.00" />                      </td>
                    <td valign="top"><div align="left">Professional Membership <span class="BodyTextBold">$50.00</span><br />
                          <span class="Signoff">(This includes 5 bi-monthly newsletters
                        sent to 1 address)</span></div></td>
                  </tr>
                  <tr align="left">
                    <td valign="top"><input name="Institutionalmembership" type="checkbox" id="Institutionalmembership" value="Institutional $130.00" /></td>
                    <td valign="top"><div align="left">Institutional Membership <span class="BodyTextBold">$130.00<br />
                        </span><span class="Signoff">(This includes up to 15 bi-monthly
                        newsletters sent to 1 address)</span> </div></td>
                  </tr>
                  <tr align="left">
                    <td valign="top"><input name="Institutionalmembership2" type="checkbox" id="Institutionalmembership2" value="Hardshipo $5.00" /></td>
                    <td valign="top"><div align="left">Financial Hardship Membership <span class="BodyTextBold">$5.00<br />
                      </span><span class="Signoff">(This includes 1 bi-monthly newsletter sent to 1 address)</span></div></td>
                  </tr>
                  <tr align="left">
                    <td colspan="2" valign="top">&nbsp;</td>
                  </tr>
                  <tr align="left">
                    <td valign="top"><input name="anthology" type="checkbox" id="anthology" value="The Other Side of Darkness $25" />                      </td>
                    <td valign="top"><table width="45" height="75" border="0" align="left" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="45" valign="top"><img src="images/sm_anthology_cover.jpg" width="38" height="55" /></td>
                      </tr>
                    </table>                      
                      <span class="BodyTextBold">$10.00<br />
                      </span>I would like to purchase a copy of <br />
&quot;The Other Side of Darkness Anthology&quot;<br />
                        <span class="Copyright">A collection of poems, short stories and anecdotes written <br />
                        by friends and members of DBSA Metro Detroit.<br />
                        (price breakdown: $10.00 plus $2.50 for shipping and handling)</span></td>
                  </tr>
                  <tr align="left">
                    <td colspan="2" valign="top"><div align="left">Donation may be a gift membership,
                        a contribution in memory or in honor of an individual,
                        family or organization.</div></td>
                    </tr>
                  <tr align="left">
                    <td colspan="2" valign="top"><div align="left">Donation Amount  <span class="BodyTextBold">$</span>&nbsp;
                          <input name="Donation" type="text" id="Donation" value="0" /> 
                        </div></td>
                  </tr>
                  <tr align="left">
                    <td colspan="2" valign="top">Additional Comments
                      <textarea name="Comments" cols="25" rows="5" id="Comments"></textarea></td>
                  </tr>
                </table>
                  <div align="left"></div>
                  <div align="center"></div></td>
                </tr>
              <tr>
                <td colspan="4" valign="top"><div align="right"></div>                  <table width="475" border="0" align="center" cellpadding="8" cellspacing="0">
                    <tr>
                      <td align="left"><div align="left">
						<input type="image" value="Submit" img src="images/continue.jpg" />
                        &nbsp;&nbsp;
 </div></td>
                    </tr>
                    <tr>
                      <td align="left" class="Copyright"><div align="left">Allow four to six weeks for delivery to begin. Try a
                          free issue of <span class="CopyrightItalic">Life in
                          Balance</span><span class="Copyright"> by
                          taking part in groups where newsletter is available for
                          newcomers only.</span></div></td>
                    </tr>
                                  </table></td>
                </tr>
            </table>
          </form></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td width="605" height="10" background="images/page_filler.gif"><?php include('includes/footer.php'); ?></td>
    </tr>
    <tr>
      <td width="145" height="10"><img src="images/side_footer.jpg" width="145" height="10"></td>
      <td width="605" height="10"><img src="images/page_footer.gif" width="605" height="10"></td>
    </tr>
  </table>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-946070-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script></body>
</html>
