--Listar todos los registros por Sucursal
CREATE PROCEDURE SP_L_COMPANIA_01
AS
BEGIN
	SELECT * FROM TM_COMPANIA
	WHERE
	EST=1
END

--Obtener registro por ID
CREATE PROCEDURE SP_L_COMPANIA_02
@COM_ID INT
AS
BEGIN
	SELECT * FROM TM_COMPANIA
	WHERE
	COM_ID = @COM_ID
END

--Eliminar Registro
CREATE PROCEDURE SP_D_COMPANIA_01
@COM_ID INT
AS
BEGIN
	UPDATE TM_COMPANIA
	SET
		EST= 0
	WHERE
		COM_ID = @COM_ID
END

--REGISTRAR NUEVO REGISTRO
CREATE PROCEDURE SP_I_COMPANIA_01
@COM_NOM VARCHAR(150)
AS
BEGIN
	INSERT INTO TM_COMPANIA
	(COM_NOM,FECH_CREA,EST)
	VALUES
	(@COM_NOM,GETDATE(),1)
END
