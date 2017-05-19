Sub highlightRows()
    Dim numRows As Long
    Dim numColumns As Long
    Dim counter As Long
    Dim hasHeader As String
    Dim highlightRange As Range

    numRows = ActiveSheet.UsedRange.Rows.Count
    numColumns = ActiveSheet.UsedRange.Columns.Count

    hasHeader = InputBox("Does your sheet have headers? ('y' or 'n')", , "y")

    If hasHeader = "y" Then

    For counter = 2 To numRows
        If counter Mod 2 = 1 Then
        ActiveSheet.Range(Cells(counter, 1), Cells(counter, numColumns)).Select
            With Selection.Interior
                .Pattern = xlSolid
                .PatternColorIndex = xlAutomatic
                .ThemeColor = xlThemeColorAccent1
                .TintAndShade = 0.799981688894314
                .PatternTintAndShade = 0
            End With
        End If
    Next counter

    Else

    For counter = 2 To numRows
         If counter Mod 2 = 0 Then
        ActiveSheet.Range(Cells(counter, 1), Cells(counter, numColumns)).Select
            With Selection.Interior
                .Pattern = xlSolid
                .PatternColorIndex = xlAutomatic
                .ThemeColor = xlThemeColorAccent1
                .TintAndShade = 0.799981688894314
                .PatternTintAndShade = 0
            End With
        End If
    Next counter

    End If
End Sub
