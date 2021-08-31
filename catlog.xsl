<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body>
    <h2>Perfumes for her</h2>
    <table border="1">
      <tr bgcolor="#d16e99">
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Description</th>
      </tr>
      <xsl:for-each select="brand/s">
      <tr>
        <td><xsl:value-of select="name" /></td>
        <td><xsl:value-of select="price" /></td>
        <td><xsl:value-of select="quantity" /></td>
        <td><xsl:value-of select="description" /></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>

