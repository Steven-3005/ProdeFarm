ALTER PROCEDURE SP_L_DOCUMENTO_01
@DOC_TIPO VARCHAR(150)
AS
BEGIN
SELECT * FROM TM_DOCUMENTO
WHERE
	EST = 1
	AND DOC_TIPO = @DOC_TIPO
END