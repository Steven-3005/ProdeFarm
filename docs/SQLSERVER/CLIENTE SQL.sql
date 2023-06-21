-- Listar todos los registros por sucursales
CREATE PROCEDURE SP_L_CLIENTE_01
@SUC_ID INT
AS
BEGIN
	SELECT * FROM TM_CLIENTE
	WHERE 
	SUC_ID = @SUC_ID
	AND EST = 1
END


--Obtener registro por ID
CREATE PROCEDURE SP_L_CLIENTE_02
@CLI_ID INT
AS
BEGIN
	SELECT * FROM TM_CLIENTE
	WHERE 
	CLI_ID = @CLI_ID
END

--Eliminar registro
CREATE PROCEDURE SP_D_CLIENTE_01
@CLI_ID INT
AS
BEGIN
	UPDATE TM_CLIENTE
	SET
		EST = 0
	WHERE
		CLI_ID = @CLI_ID
END


--Insetar nuevo regitro
CREATE PROCEDURE SP_I_CLIENTE_01
@EMP_ID INT,
@CLI_NOM VARCHAR(150),
@CLI_RUC INT,
@CLI_TELF VARCHAR(150),
@CLI_DIR VARCHAR (150),
@CLI_CORREO INT
AS
BEGIN
	INSERT INTO TM_CLIENTE
	(CLI_NOM, EMP_ID, CLI_RUC, CLI_TELF, CLI_CORREO, FECH_CREA, EST)
	VALUES
	(@CLI_NOM, @EMP_ID, @CLI_RUC, @CLI_TELF, @CLI_CORREO, GETDATE(),1)
END

--Actualizar regitro
CREATE PROCEDURE SP_U_CLIENTE_01
@CLI_ID INT,
@CLI_NOM VARCHAR(150),
@EMP_ID INT,
@CLI_RUC VARCHAR(150),
@CLI_TELF VARCHAR(150),
@CLI_DIRECC VARCHAR (150),
@CLI_CORREO INT
AS
BEGIN
	UPDATE TM_CLIENTE
	SET
		@CLI_NOM = @CLI_NOM
		EMP_ID = @EMP_ID
		CLI_RUC = @CLI_RUC
		CLI_TELF = @CLI_TELF
		CLI_DIRECC = @CLI_DIRECC
		CLI_CORREO = @CLI_CORREO
	WHERE
		@CLI_ID = @CLI_ID
END